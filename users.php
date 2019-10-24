<?php

require_once 'classes/Client.php';

$client1 = new Client( 1, 'martineau@lepoivrot.fr' );
$client2 = new Client ( 2, 'Estupido@elhombre.es');

return [ $client1, $client2];

	/*array_push($clients, $client1);
	print_r($clients);

array_push($clients, $client2);
	print_r($clients);
	*/
