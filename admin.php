<?php
// Example: Simulate an admin action (insert, update, or delete)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulate a database action (e.g., insert, update, delete)
    $action = $_POST['action']; // 'insert', 'update', 'delete'

    // After performing the action, send a notification to all clients (using an SSE endpoint)
    $data = [
        'message' => "Admin performed a $action action",
        'timestamp' => time()
    ];

    // You could use a database or other mechanism to trigger the event, but for simplicity, we'll just return a success message
    echo json_encode($data);
    exit;
}
