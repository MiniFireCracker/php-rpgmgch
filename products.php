<?php

//Créer un fichier products.php qui retourne un tableau contenant deux légumes et trois vêtements.

require_once'classes/Vegetable.php';
require_once'classes/Cloth.php';


$product1= new Vegetable( 1, "eggplant", 3, "Antonio", "2/10/2012" );

$product2= new Vegetable( 2, "avocado", 4, "FarmGarden", "31/09/2020");

$product3= new Cloth(3, "grey_scarf", 12, "Zara");

$product4= new Cloth(4, "yellow_dress", 32, "Tissea");

$product5= new Cloth(5, "white_socks", 6, 'Eco+');

$products=[ $product1, $product2, $product3, $product4, $product5];
