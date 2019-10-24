<?php

/*Créer un fichier testOrder.php où vous effectuerez des tests des scenarii suivants :

    votre premier utilisateur achète un de vos légumes
    votre second utilisateur achète un légume et un vêtement

Afficher toutes les informations nécessaires.
*/
$products = require_once 'products.php';

$customers = require_once 'users.php';

$client1->SetCart([]);
$client2->SetCart([]);

$client1->buy($product1) ;
$client2->buy($product2);
$client2->buy($product5);


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
	<?= $client1->GetCart() . '<br>'  ?>
	<?= $client2->GetCart() . '<br>'  ?>
	
	<?= $client1->GetBillAmount() . '<br>'  ?>
	<?= $client2->GetBillAmount() . '<br>'  ?>



</body>
</html>
