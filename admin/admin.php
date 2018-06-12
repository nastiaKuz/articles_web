<?php
	session_start();
	if (!($_SESSION['login']=="admin"&& $_SESSION['password']=="123"))
		header('Location: ../auth.php');
	require_once('../models/items.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="page">
	<div class="header">
		<ul class="menu">
			<li><a href="../index.php">Log out</a></li>
			<li><a href="admin.php?action=add_table">Add new table</a></li>
			<li><a href="admin.php?action=show">List</a></li>
		</ul>
	</div>
	<div class="row">
		<div id="content" class="content">
			<?php
				if (isset($_GET['action']) && $_GET['action']=='add_table') {
					include 'add_table.php';
				} elseif (isset($_GET['action']) && $_GET['action']=='show') {
					include 'list.php';
				} elseif (isset($_GET['action']) && $_GET['action']=='edit') {
					if (!isset($_GET['id'])) {
						header("Location: admin.php");
					}
					$id = (int)$_GET['id'];
					if (!empty($_POST) && $id>0) {

					}
					//include 'admin.php';
				 
				} elseif (isset($_GET['action']) && $_GET['action']=='add') {
					include 'add.php';
				} else {
					include 'list.php';
				}
			?>
			
<div class="bottom">
	<div class="bottom-menu">
		<ul class="footer">
			<li><a href="index.html">Main</a></li>
			<li><a href="yamaha.html">Yamaha</a></li>
			<li><a href="fender.html">Fender</a></li>
			<li><a href="#">Cort</a></li>
		</ul>		
	</div>
	<div class="copyright">2018</div>
</form>
</body>
</html>


