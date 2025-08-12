<?php
    namespace App\Config;

    require __DIR__ . '/../../vendor/autoload.php';

    use Predis\Client as RedisClient;
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__,'../../.env');
    $dotenv->load();


class AwsRedisConfig {
    private $redis;

    public function __construct($host, $port, $password) {
        try {
            print_r($password);

            $this->redis = new RedisClient([
                'scheme' => 'tcp',
                'host' => $host,
                'port' => (int)$port,
                'password' => $password,
            ]);
        } catch (\Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Redis connection failed: ' . $e->getMessage()]);
            exit;
        }
    }

    public function getClient() {
        return $this->redis;
    }
}

// Outside class, after dotenv loaded
$redis_host = $_ENV['REDIS_LABS_ENDPOINT'];
$redis_password = $_ENV['REDIS_PASSWORD'];
$redis_port = $_ENV['REDIS_PORT'];

$redisConfig = new AwsRedisConfig($redis_host, $redis_port, $redis_password);
    