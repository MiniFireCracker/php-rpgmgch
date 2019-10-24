<?php

//Créer un fichier products.php qui retourne un tableau contenant deux légumes et trois vêtements.

require_once'classes/Vegetable.php';
require_once'classes/Cloth.php';

return [
	new Vegetable( 1, "eggplant", 3, "Antonio", "2/10/2012" ),
	new Vegetable( 2, "avocado", 4, "FarmGarden", "31/09/2020"),
	new Cloth(3, "grey_scarf", 12, "Zara"),
	new Cloth(4, "yellow_dress", 32, "Tissea"),
	new Cloth(5, "white_socks", 6, 'Eco+')
];