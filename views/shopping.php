	<?php
	 	$clients = require_once(__DIR__."/../data/users.php");
        $products = require_once(__DIR__."/../data/products.php");
       //var_dump($clients);
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
         
	<form>
		<label> Identify yourself as : </label>
		<select>
			<?php for($i=0; $i<count($clients); ++$i){ ?>
			<option value= <?php $clients[$i]->getId() ?> ><?= $clients[$i]->getId() ?></option>
			<?php }; ?>
		</select>
		<label> Fill your cart with: </label>
			<select>
			<?php for($i=0; $i<count($products); ++$i){ ?>
			<option value= <?php $products[$i]->getName() ?>><?= $products[$i]->getName() ?></option>
			<?php }; ?>
			</select>
			<select>
			<?php for($i=0; $i<count($products); ++$i){ ?>
			<option value= <?php $products[$i]->getName() ?>><?= $products[$i]->getName() ?></option>
			<?php }; ?>
			</select>
		<select>
			<?php for($i=0; $i<count($products); ++$i){ ?>
			<option value= <?php $products[$i]->getName() ?>><?= $products[$i]->getName() ?></option>
			<?php }; ?>
			</select>
		

		<button type=submit> Order </button>
	</form>
<?php
	
?>

</body>
</html>
