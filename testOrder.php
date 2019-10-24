<?php

/*Créer un fichier testOrder.php où vous effectuerez des tests des scenarii suivants :

    votre premier utilisateur achète un de vos légumes
    votre second utilisateur achète un légume et un vêtement

Afficher toutes les informations nécessaires.
*/
$products = require_once 'products.php';

$clients = require_once 'users.php';


$clients[0]->buy($products[0]);

$clients[1]->buy($products[1]);
$clients[1]->buy($products[4]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	echo "Client1's cart contains the following items: ";

foreach($client1->getCart() as $item) {   
        echo  $item  ;
} 

echo "// This purchase will amount to : " . $client1->getBillAmount() . "<br>";

echo "Client2's cart holds the following items: ";

foreach($client2->getCart() as $item) {
        echo  $item . ", " ;
} 

echo "// This purchase will amount to :" . $client2->getBillAmount() . "";
?>

</body>
</html>
