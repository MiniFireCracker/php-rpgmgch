	<?php
	 	$clients = require_once(__DIR__."/../data/users.php");
        $products = require_once(__DIR__."/../data/products.php");
    var_dump($_POST);
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


	<h1> Hey there <?= $_POST['client'] ?> </h1>
	<H2> Thank you for your interest in our products !</H2>
	<p>Here is the list of the products actually in your cart :</p>

	<ul>
		
		<?php foreach($_POST as $productSelected): ?>
		<?php if($productSelected != $_POST['client']):?>

		<li> <?= $productSelected ?> </li>
		<?php endif;   ?>
		<?php endforeach; ?>
		
	</ul>
<?php
	
?>

</body>
</html>
