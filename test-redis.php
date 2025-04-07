<?php
    namespace App\Config;

    use Predis\Client;
    require 'vendor/autoload.php';

    class AwsRedisConfig {
        private $redis;

        public function __construct() {
            // Load environment variables from .env file
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
            $dotenv->load();

            $this->redis = new Client([
                'scheme' => 'tcp',
                'host' => 'clustercfg.hotelrosegarden-cache-custom.gy1ak0.cac1.cache.amazonaws.com',
                'port' => 6379
            ]);

            // Test Redis connection using PING command
            $response = $this->redis->ping(); // Should return 'PONG' if the connection is working

            if ($response === 'PONG') {
                echo "Redis connection successful!";
            } else {
                echo "Redis connection failed.";
            }
        }

        public function getClient() {
            return $this->redis;
        }
    }
    ?>