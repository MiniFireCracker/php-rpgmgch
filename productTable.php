<?php

 $products_file = require_once'products.php';

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
	<?php if(count($products)>0) :?>

<?= var_dump($products); ?>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>price</th>


				<th>productor name</th>
				<th>expiration date</th>


				<th>brand</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $singleproduct): ?>
			<tr>
				<td><?=$singleproduct->getId() ?></td>
				<td><?=$singleproduct->getName() ?></td>
				<td><?=$singleproduct->getPrice() ?></td>

				<?php if(get_class($singleproduct)=='Vegetable'): ?>
				<td><?=$singleproduct->GetProductorName() ?></td>
				<td><?=$singleproduct->GetExpirationDate() ?></td>

				<?php 
					else: ?>
				<td> </td>
				<td> </td>
				<?php 

				endif;?>

				<?php if(get_class($singleproduct)=='Cloth'): ?>
				<td><?=$singleproduct->GetBrand() ?></td>
				<?php 
					else: ?>
				<td> </td>

				<?php endif;?>


			</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>

	<?php	
	endif;
	?>
</body>
</html>
