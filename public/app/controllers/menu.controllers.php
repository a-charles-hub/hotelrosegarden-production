<?php
    class MenuController extends Menu {
        private $category;

        public function __construct($category) {
            $this->category = $category;
        }

        public function get_menu() {
            $this->fetch_menu($this->category);
        }
    }