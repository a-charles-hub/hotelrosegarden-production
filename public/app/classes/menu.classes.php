<?php
    use App\Config\AwsRedisConfig;
    require '../../../vendor/autoload.php';
    
    class Menu extends Dbh {
        public function fetch_menu() {
            try {
                $redis = new AwsRedisConfig();
                $redis_cache = $redis->getClient();

                $cachedData = $redis_cache->get('menus');

                if($cachedData) {
                    $menus = json_decode($cachedData, true);

                    $response = [
                        'success' => true,
                        'data' => $menus,
                        'source' => 'redis',
                        'message' => 'Data fetched from Redis Cache'
                    ];
                }

                else {
                    // Start a transaction
                    $this->connect()->beginTransaction();

                    // Fetch data
                    $stmt = $this->connect()->prepare("SELECT id, menu_title, menu_category, menu_description, menu_url, menu_price, COUNT(*) OVER (PARTITION BY menu_category) AS category_total FROM menu ORDER BY menu_title ASC");
                    $stmt->execute();

                    if($stmt->rowCount() > 0) {
                        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $all_dishes_count = count($data);

                        // Set data in an array
                        $menus = [];
                        $category_count = [];

                        foreach($data as $row) {
                            $menus[] = [
                                'menu_id' => $row['id'],
                                'title' => ucwords($row['menu_title']),
                                'category' => ucwords($row['menu_category']),
                                'url' => $row['menu_url'],
                                'total_rows' => $all_dishes_count,
                                'category_total' => $row['category_total'],
                                'price' => $row['menu_price'],
                                'description' => $row['menu_description']
                            ];
                        }

                        // If a transaction is in progress, save the changes
                        if($this->connect()->inTransaction()) {
                            $this->connect()->commit();
                        }

                        // Store in redis for 30 days
                        $redis_cache->setex('menus', 2592000, json_encode($menus));

                        $response = [
                            'success' => true,
                            'data' => $menus,
                            'source' => 'database',
                            'message' => 'Data fetched from database and cached'
                        ];
                    }
                    else {
                        $response = [
                            'success' => false,
                            'message' => 'No data found.'
                        ];
                    }

                    // Get latest updated_at
                    $updated_at_stmt = $this->connect()->prepare("SELECT MAX(updated_at) as latest_update FROM menu");
                    $updated_at_stmt->execute();
                    $latest = $updated_at_stmt->fetch(PDO::FETCH_ASSOC);
                    $version = $latest['latest_update'];

                    // Save version to menu-version.json
                    //file_put_contents("../../../src/json/menu-version.json", json_encode(['version' => $version], JSON_PRETTY_PRINT));

                }

            } catch (Exception $e) {
                // In case of an error, roll back the transaction
                $this->connect()->rollBack();

                $response = [
                    'success' => false,
                    'message' => 'Error fetching menu ' . $e->getMessage()
                ];
            }

            // Output JSON response
            header('Content-Type: application/json');
            echo json_encode($response);

            // Save all menu to menu.json
            //file_put_contents("../../../src/json/menu.json", json_encode($response, JSON_PRETTY_PRINT));
            exit();
        }
    }

    class DeleteMenu extends Dbh {
        public function delete_menu($menu_id) {
            try {
                // Start a transaction to ensure all database operations are completed successfully
                $this->connect()->beginTransaction();
                
                // Create prepared statement
                $stmt = $this->connect()->prepare('SELECT * FROM menu WHERE id = ?');
                $stmt->execute([$menu_id]);

                if($stmt->rowCount() > 0) {
                    // Create delete statement
                    $deleteStmt = $this->connect()->prepare('DELETE FROM menu WHERE id = ?');
                    $deleteStmt->execute([$menu_id]);

                    // Invalidate cache only, no recache
                    $redis = new AwsRedisConfig();
                    $redis_cache = $redis->getClient();
                    $redis_cache->del('menus');


                    // If a transaction is in progress, save the changes
                    if($this->connect()->inTransaction()) {
                        $this->connect()->commit();
                    }

                    // Return JSON response
                   $response = [
                        'success' => true,
                        'message' => 'Menu deleted - cache deleted'
                    ];
                }
            } catch (Exception $e) {
                // In case of error, roll back transaction
                $this->connect()->rollBack();

                $response = [
                    'success' => false,
                    'message' => 'Error deleting menu ' . $e->getMessage()
                ];
            }

            // Output JSON response
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }
    }