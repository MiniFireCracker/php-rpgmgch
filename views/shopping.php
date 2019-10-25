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
	 	$clients = require_once(__DIR__."/../data/users.php");
        $products = require_once(__DIR__."/../data/products.php");
       //var_dump($clients);
	?>


	<form action="/validateOrder.php" method="POST">
		<label> Identify yourself as : </label>
		<select id="client" name="client" >
			<?php for($i=0; $i<count($clients); ++$i){ ?>
			<option><?= $clients[$i]->getId() ?></option>
			<?php }; ?>
		</select>
		<label> Fill your cart with: </label>
			<select id="purchase1" name="purchase1">
			<?php for($i=0; $i<count($products); ++$i){ ?>
			<option><?= $products[$i]->getName() ?></option>
			<?php }; ?>
			</select>
			<select id="purchase2" name="purchase2">
			<?php for($i=0; $i<count($products); ++$i){ ?>
			<option><?= $products[$i]->getName() ?></option>
			<?php }; ?>
			</select>
			<select id="purchase3" name="purchase3">
			<?php for($i=0; $i<count($products); ++$i){ ?>
			<option><?= $products[$i]->getName() ?></option>
			<?php }; ?>
			</select>
	
		<button type=submit> Add to cart</button>
	</form>
<?php
	
?>

</body>
</html>
