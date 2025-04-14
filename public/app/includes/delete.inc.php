<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Declare variables
        $menu_id = $_GET['menu_id'];

        // Includes
        include_once '../../../src/database/dbh.classes.php';
        include_once '../classes/menu.classes.php';
        include_once '../controllers/delete.controller.php';

        $delete = new DeleteMenuController($menu_id);
        $response = $delete->delete();

        // Return a JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }