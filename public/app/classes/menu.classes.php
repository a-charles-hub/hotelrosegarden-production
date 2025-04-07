<?php
    use App\Config\AwsRedisConfig;
    require '../../../vendor/autoload.php';
    
    class Menu extends Dbh {
        const MENU = "menu";
        
        public function fetch_menu() {
            try {
                $redis = new AwsRedisConfig();
                $redis_cache = $redis->getClient();

                // Cached key
                $cached_key = 'menu:all';

                // Check redis cache first
                if($redis_cache->exists($cached_key)) {
                    $cachedData = json_decode($redis_cache->get($cached_key), true);

                    $response = $this->redis->ping(); // Should return 'PONG' if the connection is working

                    if ($response === '+PONG') {
                        echo "Redis connection successful!";
                    } else {
                        echo "Redis connection failed.";
                    }

                    
                    header('Content-Type: application/json');
                    echo json_encode($response);
                    exit();
                }

                // Start a transaction
                $this->connect()->beginTransaction();

                // Fetch data
                $stmt = $this->connect()->prepare("SELECT * FROM menu");
                $stmt->execute();

                if($stmt->rowCount() > 0) {
                    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // If a transaction is in progress, save the changes
                    if($this->connect()->inTransaction()) {
                        $this->connect()->commit();
                    }

                    $response = [
                        'success' => true,
                        'data' => $response,
                        'message' => 'date fetched'
                    ];
                }
                else {
                    $response = [
                        'success' => false,
                        'message' => 'No data found.'
                    ];
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