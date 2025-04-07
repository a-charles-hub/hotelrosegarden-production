<?php
    // Includes
    include_once '../../../src/database/dbh.classes.php';
    include_once '../classes/menu.classes.php';

    $menu = new Menu();
    $response = $menu->fetch_menu();

    // Return a JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();