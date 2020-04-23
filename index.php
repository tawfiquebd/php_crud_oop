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
				<th width="25%">SL.</th>
				<th width="25%">Name</th>
				<th width="25%">Email</th>
				<th width="25%">Skill</th>
				<th width="25%">Action</th>
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
				<td width="25%"><?php echo $id?></td>
				<td width="50%"><?php echo $row['name']?></td>
				<td width="25%"><?php echo $row['email']?></td>
				<td width="25%"><?php echo $row['skill']?></td>
				<td width="25%"><a href="update.php?id=<?php echo $id?>">Edit</a></td>
			</tr>

			<?php } ?>
			<?php } else { ?>
			<p>Data is not available!</p>
			<?php } ?>
		</tbody>
	</table>









<?php include_once 'inc/footer.php' ;?>