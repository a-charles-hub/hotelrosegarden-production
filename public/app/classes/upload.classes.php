<?php
    use App\Config\AwsS3Config;
    use App\Config\AwsRedisConfig;
    require '../../../vendor/autoload.php';
    
    class Upload extends Dbh {
        public function uploadFile($file_name, $file_content, $menu_title, $menu_category, $menu_description, $menu_price) {

            try {
                // Start a transaction to ensure all database operations are completed successfully
                 $this->connect()->beginTransaction();
                
                // Get S3 Client instance
                $aws = new AwsS3Config();
                $s3 = $aws->getClient();
                $bucket_name = $_ENV['AWS_S3_BUCKET'];
                
                // Upload to S3
                $result = $s3->putObject([
                    'Bucket' => $bucket_name,
                    'Key' => 'uploads/' . $file_name,
                    'Body' => $file_content
                ]);
                
                $file_url = $result['ObjectURL'];
                
                // CloudFront URL
                $cloud_front_url = 'https://d1juexuh03hmas.cloudfront.net/uploads/' . $file_name;
                
                // Upload metadata to the database
                $stmt = $this->connect()->prepare("INSERT INTO menu (menu_title, menu_category, menu_description, menu_url, menu_price) VALUES (?,?,?,?,?)");
                $stmt->execute([$menu_title, $menu_category, $menu_description, $cloud_front_url, $menu_price]);
                
                // If a transaction is in progress, save the changes
                if ($this->connect()->inTransaction()) {
                    $this->connect()->commit();
                }

                if ($stmt->rowCount() > 0) {
                    // Invalidate cache only, no recache
                    $redis = new AwsRedisConfig();
                    $redis_cache = $redis->getClient();
                    $redis_cache->del('menus');
                
                    $response = [
                        'success' => true,
                        'message' => 'New menu added. Cache invalidated.'
                    ];
                }
            } catch (Exception $e) {
                // In case of an error, roll back the transaction
                $this->connect()->rollBack();

                $response = [
                    'success' => false,
                    'message' => 'Error adding menu: ' . $e->getMessage()
                ];
            }
    
            // Output JSON response
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }
    }
    