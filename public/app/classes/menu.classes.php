<?php
    use App\Config\AwsRedisConfig;
    require '../../../vendor/autoload.php';
    require_once '../../../src/database/dbh.classes.php';
    
    class Menu extends Dbh {
        const MENU = "menu";
        
        public function fetch_menu() {
            try {
                $redis = new AwsRedisConfig();
                $redis_cache = $redis->getClient();

                $cachedData = $redis_cache->get('menus');

                if($cachedData) {
                    $menus = json_decode($cachedData, true);

                    header('X-Data-Source: redis');
                    header('Cache-Control: public, max-age=3600'); 

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
                    $stmt = $this->connect()->prepare("SELECT * FROM menu");
                    $stmt->execute();

                    if($stmt->rowCount() > 0) {
                        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        // Set data in an array
                        $menus = [];

                        foreach($data as $row) {
                            $menus[] = [
                                'title' => $row['menu_title'],
                                'category' => $row['menu_category'],
                                'url' => $row['menu_url']
                            ];
                        }

                        // If a transaction is in progress, save the changes
                        if($this->connect()->inTransaction()) {
                            $this->connect()->commit();
                        }

                        // Store in redis for 1 hour
                        $redis_cache->setex('menus', 3600, json_encode($menus));

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
                }


            } catch (Exception $e) {
                $response = [
                    'success' => false,
                    'message' => 'Error fetching menu ' . $e->getMessage()
                ];
            }

            // Output JSON response
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }
    }
