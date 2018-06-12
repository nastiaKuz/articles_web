<?php
require_once '../data.php';
	$data=array();
$sql="SELECT * FROM guitars";
	$result=$conn->query($sql);
	if ($result->num_rows>0) {
		while($row=$result->fetch_assoc()) {		
			$data[]=$row;
		}
	} else {
		echo  "Your list is empty";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="admin.php?action=add">ADD NEW ITEM</a>
	<div>
		<table class="table" cellpadding="5" border="1">
			<caption>Guitars</caption>
			<tr>
				<th>№</th>
				<th>Company</th>
				<th>Name</th>
				<th></th>
				<th></th>
			</tr>
			<?php foreach($data as $item) { ?>
			<tr>
				<td><?php echo $item['id'];?></td>
				<td><?php echo $item['company'];?></td>
				<td><?php echo $item['name'];?></td>
				<td><a href="admin.php?action=edit&id=<?=$item['id']?>">Edit</a></td>
				<td><a href="admin.php?action=delete&id=<?=$item['id']?>">Delete</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>