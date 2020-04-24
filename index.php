<?php 
include_once 'inc/header.php' ;
include_once 'class/Database.php' ;
?>

<?php

	$db = new Database;
	$query = "SELECT * FROM tbl_users";
	$read = $db->select($query);

?>

<?php
	if (isset($_GET['msg'])) {
		echo "<span style='color:green;'>" .$_GET['msg']. "</span>" ;
	}

?>

	<table class="table">
		<thead>
			<tr>
				<th>SL.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Skill</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if($read) { 
				$sl = 0;
			?>
			<?php while($row = $read->fetch_assoc()){ 
				$sl++;
			?>

			<tr>
				<td><?php echo $sl?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['skill']?></td>
				<td><a href="update.php?id=<?php echo urlencode($row['id'])?>">Edit</a></td>
			</tr>

			<?php } ?>
			<?php } else { ?>
			<p>Data is not available!</p>
			<?php } ?>
		</tbody>
	</table>

	<a class="btn" href="create.php">Create</a>







<?php include_once 'inc/footer.php' ;?>