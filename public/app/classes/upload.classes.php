<?php
    use App\Config\AwsS3Config;
    require '../../../vendor/autoload.php';
    
    class Upload extends Dbh {
        public function uploadFile($file_name, $file_content, $menu_title, $menu_category, $menu_description) {
            try {
                // Start a transaction to ensure all database are completed successfully
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
                $stmt = $this->connect()->prepare("INSERT INTO menu (menu_title, menu_category, menu_description, menu_url) VALUES (?, ?, ?, ?)");
                $stmt->execute([$menu_title, $menu_category, $menu_description, $cloud_front_url]);

                // If a transaction is in progress, save the changes
                if ($this->connect()->inTransaction()) {
                    $this->connect()->commit();
                }

                $response = [
                    'success' => true,
                    'message' => 'New Menu Added!'
                ];

            } catch (Exception $e) {
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