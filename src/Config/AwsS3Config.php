<?php
    namespace App\Config;

    use Aws\S3\S3Client;
    require '../../../vendor/autoload.php';
    
    class AwsS3Config {
        private $s3Client;

        public function __construct() {
            // Load environment variables from .env file
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();

            // Amazon S3 API credentials
            $region = $_ENV['AWS_S3_REGION'];
            $s3_key = $_ENV['AWS_S3_ACCESS_KEY'];
            $s3_secret_key = $_ENV['AWS_S3_SECRET_ACCESS_KEY'];
            $s3_bucket_name = $_ENV['AWS_S3_BUCKET'];

            // Create an S3Client instance
            $this->s3Client = new S3Client([
                'region' => $region,
                'version' => 'latest',
                'credentials' => [
                    'key' => $s3_key,
                    'secret' => $s3_secret_key
                ]
            ]);
        }

        public function getClient() {
            return $this->s3Client;
        }
    }