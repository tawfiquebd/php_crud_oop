<?php 
include_once 'inc/header.php' ;
include_once 'class/Database.php' ;
?>

<?php
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	else{
		header("location:index.php");
	}
	

	$db = new Database;
	$query = "SELECT * FROM tbl_users WHERE id = '$id' ";
	$getData = $db->select($query)->fetch_assoc();

	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($db->link,$_POST['name']);
		$email = mysqli_real_escape_string($db->link,$_POST['email']);
		$skill = mysqli_real_escape_string($db->link,$_POST['skill']);
		if(empty($name) || empty($email) || empty($skill)){
			$error = "Field must not be empty!";
		}
		else{
			$query = "UPDATE tbl_users SET name = '$name' , email = '$email' , skill = '$skill' WHERE id = '$id' ";

			$update = $db->update($query);
			
		}
	}

?>

<?php
if (isset($_POST['delete'])) {
	$query = "DELETE FROM tbl_users WHERE id = $id";
	$deleteData = $db->delete($query);

}


?>

<?php
	if (isset($error)) {
		echo "<span style='color:red;'>" .$error. "</span>" ;
	}

?>
<form action="update.php?id=<?php echo urlencode($id)?>" method="post">
	<table class="table">
		<tbody>

			<tr>
				<td>Name</td>
				<td><input type="text" value="<?php echo $getData['name']?>" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" value="<?php echo $getData['email']?>" name="email"></td>
			</tr>
			<tr>
				<td>Skill</td>
				<td><input type="text" value="<?php echo $getData['skill']?>" name="skill"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Update">
					<input type="reset" name="reset" value="Reset">
					<input class="delete" type="submit" name="delete" value="Delete">
				</td>
				
			</tr>
		</tbody>
	</table>
</form>

	<a class="btn" href="index.php">Back</a>







<?php include_once 'inc/footer.php' ;?>