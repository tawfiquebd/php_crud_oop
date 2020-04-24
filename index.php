<?php 
include_once 'inc/header.php' ;
include_once 'class/Database.php' ;
?>

<?php

	$db = new Database;
	$query = "SELECT * FROM tbl_users";
	$read = $db->select($query);

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
				$id = 0;
			?>
			<?php while($row = $read->fetch_assoc()){ 
				$id++;
			?>

			<tr>
				<td><?php echo $id?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['skill']?></td>
				<td><a href="update.php?id=<?php echo $id?>">Edit</a></td>
			</tr>

			<?php } ?>
			<?php } else { ?>
			<p>Data is not available!</p>
			<?php } ?>
		</tbody>
	</table>









<?php include_once 'inc/footer.php' ;?>