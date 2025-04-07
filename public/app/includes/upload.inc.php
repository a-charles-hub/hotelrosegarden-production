<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
        // Declare variables
        $file = $_FILES['file'];
        $file_name = basename($file['name']);
        $file_content = fopen($file['tmp_name'], 'r');
        
        // Sanitize variables
        $menu_title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
        $menu_category = htmlspecialchars($_POST['category'], ENT_QUOTES, 'UTF-8');
        $menu_description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');

        // Includes
        include_once '../../../src/database/dbh.classes.php';
        include_once '../classes/upload.classes.php';
        include_once '../controllers/upload.controllers.php';

        // Instantiate the UploadController class
        $upload = new UploadController($file_name, $file_content, $menu_title, $menu_category, $menu_description);
        $response = $upload->upload();

        // Return a JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }