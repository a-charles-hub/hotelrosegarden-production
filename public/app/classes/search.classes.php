<?php
    use App\Config\AwsRedisConfig;
    require '../../../vendor/autoload.php';

    class Search extends Dbh {
        public function search($search_input) {
            try {
                // Start a transaction
                $this->connect()->beginTransaction();

                // Fetch data
                // Create prepared statement
                /*
                $stmt = $this->connect()->prepare('SELECT * FROM menu WHERE MATCH(menu_title, menu_category) AGAINST(? IN BOOLEAN MODE)');

                $stmt->execute([$search_input]);

                if($stmt->rowCount() > 0) {
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $result = [];

                    foreach($data as $row) {
                        $result[] = [
                            'id' => $row['id'],
                            'title' => $row['menu_title'],
                            'category' => $row['menu_category'],
                            'url' => $row['menu_url'],
                            'price' => $row['menu_price']
                        ];
                    }

                    // If transaction is in progress, save the changes
                    if($this->connect()->inTransaction()) {
                        $this->connect()->commit();
                    }

                    $response = [
                        'success' => true,
                        'data' => $result
                    ];  
                }
                else {
                    $response = [
                        'success' => false,
                        'message' => 'No data found.'
                    ];
                }
                */

            }
            catch (Exception $e) {
                // In case of error, roll back transaction
                $this->connect()->rollBack();

                $response = [
                    'success' => false,
                    'message' => 'Error fetching data' . $e->getMessage()
                ];
            }

            // Output JSON response
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }
    }
