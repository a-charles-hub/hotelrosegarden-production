<?php
    // Includes
    $search_input = $_GET['search'];

    include_once '../../../src/database/dbh.classes.php';
    include_once '../classes/search.classes.php';

    $menu = new Search();
    $result = $menu->search($search_input);

    // Return a JSON response
    header('Content-Type: application/json');
    echo json_encode($result);
    exit();