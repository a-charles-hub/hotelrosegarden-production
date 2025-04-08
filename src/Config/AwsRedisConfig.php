<?php
    namespace App\Config;

    require '../../../vendor/autoload.php';
    use Predis\Client as RedisClient;


    class AwsRedisConfig {
        private $redis;

        public function __construct() {
            // Load environment variables from .env file
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();

            try {
                $this->redis = new RedisClient([
                    'scheme' => 'tcp',
                    'host' => '127.0.0.1',
                    'port' => 6379,
                ]);
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'Redis connection failed: ' . $e->getMessage()]);
                exit; // Exit if Redis connection fails
            }
        }

        public function getClient() {
            return $this->redis;
        }
    }
