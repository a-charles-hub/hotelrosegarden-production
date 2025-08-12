<?php
    namespace App\Config;

    require __DIR__ . '/../../vendor/autoload.php';  // Adjust path if needed
    
    use Predis\Client as RedisClient;
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__,'../../.env');
    $dotenv->load();

    class AwsRedisConfig {
        private $redis;

        public function __construct() {
            // Declare variables
            $redis_host = $_ENV['REDIS_LABS_ENDPOINT'];
            $redis_password = $_ENV['REDIS_PASSWORD'];
            $redis_port = $_ENV['REDIS_PORT'];

            try {
                $this->redis = new RedisClient([
                    'scheme' => 'tcp',
                    'host' => $redis_host,
                    'port' => $redis_port,
                    'password' => $redis_password,
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
