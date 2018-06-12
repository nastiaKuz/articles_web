<?php
	session_start();
	include_once "data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guitars</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
</head>
<body>
<div class="page">
	<div class="header">
		<ul class="menu">
			<li><a href="index.php">Main</a></li>
			<li><a href="#">Yamaha</a></li>
			<li><a href="#">Fender</a></li>
			<li><a href="#">Cort</a></li>
			<li><a href="auth.php">Log in</a></li>
			<li><a href="#">Log out</a></li>
		</ul>
	</div>
	<div class="row">
		<div id="content" class="content">
			<?php
				if (isset($_GET['user']) && $_GET['user']=='admin') {
					include_once 'admin/admin.php';
				} else {
					include_once 'public/user.php';
				} 
			?>			
		</div>
	</div>
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
</div>
</div>
<script src="js/script.js"></script>
</body>
</html>