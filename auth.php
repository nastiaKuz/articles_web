<?php
session_start();
echo '<div class="auth">
	<form action="" method="post">
		<p>Enter to admin panel:</p>
			<p>
				<input type="text" name="login">
			</p>
			<p>
				<input type="password" name="password">
			</p>
			<input type="submit" value="Enter" name="enter">
		</form>
		</div>';
	// if (!isset($_POST['enter'])) {
		
	// } else {
		if (isset($_POST['enter'])) {
			if ($_POST['login']=='admin' && $_POST['password']=='123') {
			$_SESSION['login']=$_POST['login'];
			$_SESSION['password']=$_POST['password'];
			header("Location: admin/admin.php");
		} else {
			echo "Error";
		}
	}
//	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

</body>
</html>