<?php 

require __DIR__ . '/customer.php';
require __DIR__ . '/product.php';



$customer1 = new Customer('Jonny','Bravo', 'jonnybravo@gmail.com', '12__45Asfqfkn@@');
echo $customer1->getName();
echo $customer1->getSurname();
echo $customer1->getEmail();
echo $customer1->getPwd();

$product1 = new Product('Air','Nike', 'Shoes', '100£');
echo $product1->getName();
echo $product1->getBrand();
echo $product1->getCategory();
echo $product1->getPrice();

?>