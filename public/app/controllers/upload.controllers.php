<?php
    class UploadController extends Upload {
        private $file_name;
        private $file_content;
        private $menu_title;
        private $menu_category;
        private $menu_description;
        private $menu_price;

        public function __construct($file_name, $file_content, $menu_title, $menu_category, $menu_description, $menu_price) {
            $this->file_name = $file_name;
            $this->file_content = $file_content;
            $this->menu_title = $menu_title;
            $this->menu_category = $menu_category;
            $this->menu_description = $menu_description;
            $this->menu_price = $menu_price;
        }
        
        public function upload() {
            $this->uploadFile($this->file_name, $this->file_content, $this->menu_title, $this->menu_category, $this->menu_description, $this->menu_price);
        }
    }