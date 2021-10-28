<!-- Customers, Products, Cart, Credit Card -->
<?php 

require __DIR__ . '/customer.php';


$customer1 = new Customer('Jonny','Bravo', 'jonnybravo@gmail.com', '12__45Asfqfkn@@');
echo $customer1->getName();
echo $customer1->getSurname();
echo $customer1->getEmail();
echo $customer1->getPwd();


?>


