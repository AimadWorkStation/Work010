<?php 
		
	include_once 'config.php';

	$stmt = $con -> prepare('select * from note order by id desc');

	$stmt -> execute();
	while ( $row = $stmt->fetch()) { ?>	
			<li>
		 		<span></span>
		 		<div class="title"><?php echo $row['name']; ?></div>
		 		<div class="info"><?php echo $row['message']; ?></div>
		 		<div class="type"><?php echo $row['email']; ?></div>
		 	</li>
	<?php } ?>