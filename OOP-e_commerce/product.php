<?php 
    class Product {
        private $name;
        private $brand;
        private $price;

        public function __construct($_name, $_brand, $_price) {
            $this->setName($_name);
            $this->setBrand($_brand);
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

        // PRICE Setter and Getter

        public function setPrice($price) {
            $this->price = $price;
        }

        public function getPrice() {
            return $this->price;
        }
    }; 

    class Dress extends Product {

        protected $size;
        protected $texture;

        
        protected function __construct($_size, $_name, $_brand, $_category, $_price){

            $this->size = $_size;
            $this->texture = $texture;

            parent::__construct($_name, $_brand, $_category, $_price);
        }
        
    }

    class Accessory extends Product {

        protected $weight;
        protected $comfort;
        
        protected function __construct($_weight, $_comfort, $_name, $_brand, $_category, $_price){

            $this->weight = $weight;
            $this->comfort = $comfort;

            parent::__construct($_name, $_brand, $_category, $_price);
        }
        
    }
?>
