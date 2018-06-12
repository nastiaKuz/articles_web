<?php
$servername="localhost";
$username="root";
$password="";
$database="residents";
$conn=new mysqli($servername, $username, $password, $database);




if (isset($_POST['name'])&&isset($_POST['company'])&&isset($_POST['price'])&&isset($_POST['type'])) {
	$company=$_POST['company'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$price=$_POST['price'];

	$sql="INSERT INTO guitars (company, name, type, price) VALUES ('$company', '$name', '$type', '$price')";
	$conn->query($sql);
	if (!$conn->error) {
		echo "New item was successfully added";
	}
	header("Location: index.php");
	die();
}



?>