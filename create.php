<?php 
include_once 'inc/header.php' ;
include_once 'class/Database.php' ;
?>

<?php

	$db = new Database;
	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($db->link,$_POST['name']);
		$email = mysqli_real_escape_string($db->link,$_POST['email']);
		$skill = mysqli_real_escape_string($db->link,$_POST['skill']);
		if(empty($name) || empty($email) || empty($skill)){
			$error = "Field must not be empty!";
		}
		else{
			$query = "INSERT INTO tbl_users VALUES(NULL,'$name','$email','$skill')";
			$create = $db->create($query);
			
		}
	}

?>

<?php
	if (isset($error)) {
		echo "<span style='color:red;'>" .$error. "</span>" ;
	}

?>
<form action="create.php" method="post">
	<table class="table">
		<tbody>
			<tr>
				<td>Name</td>
				<td><input type="text" placeholder="Please Enter Name" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" placeholder="Please Enter Email" name="email"></td>
			</tr>
			<tr>
				<td>Skill</td>
				<td><input type="text" placeholder="Please Enter Skill" name="skill"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save">
				<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</tbody>
	</table>
</form>

	<a class="btn" href="index.php">Back</a>







<?php include_once 'inc/footer.php' ;?>