<?php 

    class Cart {
        private $items = [];

        public function __construct($_items) {
            $this->items = $_items;

        }

        public function getItems() {
            return $this->items;
        }

        public function add($product) {
            array_push($product);
        }

        public function remove($product) {
            $key = array_search($product);
            array_splice($items, $key);
        }
    }; 

    
?>
