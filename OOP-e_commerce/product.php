<?php 
    class Product {
        private $name;
        private $brand;
        private $category;
        private $price;

        public function __construct($_name, $_brand, $_category, $_price) {
            $this->setName($_name);
            $this->setBrand($_brand);
            $this->setCategory($_category);
            $this->setPrice($_price);
        }

        // NAME Setter and Getter

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        // BRAND Setter and Getter

        public function setBrand($brand) {
            $this->brand = $brand;
        }

        public function getBrand() {
            return $this->brand;
        }

        // BRAND Setter and Getter

        public function setCategory($category) {
            $this->category = $category;
        }

        public function getCategory() {
            return $this->category;
        }

        // PRICE Setter and Getter

        public function setPrice($price) {
            $this->price = $price;
        }

        public function getPrice() {
            return $this->price;
        }
    }; 
?>
