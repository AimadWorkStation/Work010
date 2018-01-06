<?php 
		
	include_once 'config.php';
 	$name = $_POST['Name'];
 	$message = $_POST['Message'];
 	$email = $_POST['Email'];


 	$stmt = $con -> prepare("insert into note(name,message,email) values(?,?,?)");
 	$stmt -> execute(array($name,$message,$email));

	$stmt = $con -> prepare('SELECT * FROM note ORDER BY id DESC LIMIT 1');

	$stmt -> execute();
	$row = $stmt ->fetch(); 
	$count = $stmt -> rowCount();
	if($count > 0){
	 ?>	
			<li>
		 		<span></span>
		 		<div class="title"><?php echo $row['name']; ?></div>
		 		<div class="info"><?php echo $row['message']; ?></div>
		 		<div class="type"><?php echo $row['email']; ?></div>
		 	</li>
	<?php 
		}
	?>