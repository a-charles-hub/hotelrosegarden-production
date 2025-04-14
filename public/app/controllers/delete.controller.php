<?php
    class DeleteMenuController extends DeleteMenu {
        private $menu_id;

        public function __construct($menu_id) {
            $this->menu_id = $menu_id;
        }

        public function delete() {
            $this->delete_menu($this->menu_id);
        }
    }