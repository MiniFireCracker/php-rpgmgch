<?php

 $users = require_once ('../data/users.php');

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
	<?php if(count($clients)>0) :?>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>email</th>
				<th>creation date</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($clients as $client): ?>
			<tr>
				<td><?=$client->getId() ?></td>
				<td><?=$client->getEmail() ?></td>
				<td><?=$client->getDate() ?></td>
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

