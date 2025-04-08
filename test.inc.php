<?php
    require_once 'vendor/autoload.php';

// Create a new Predis client instance with TLS
$client = new Client([
    'scheme' => 'tls', 
    'host'   => '127.0.0.1', 
    'port'   => 6380, // TLS port
]);

// Set a value
$setResult = $client->set('key', 'value');
echo "Set result: $setResult\n"; // Output should be 'OK'

// Get the value
$value = $client->get('key');
echo "Get result: $value\n"; // Output should be 'value'

// Close the connection
$client->disconnect();
?>