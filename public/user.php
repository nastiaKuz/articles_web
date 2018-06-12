<form class="form" action="index.php" method="post">
	<p>Enter a company 1<input type="text" name="guitar[]" class="guitar" required></p>
	<p>Enter a company 2<input type="text" name="guitar[]" class="guitar" required></p>
	<p>Enter a company 3<input type="text" name="guitar[]" class="guitar" required></p>
	<p>Enter a company 4<input type="text" name="guitar[]" class="guitar" required></p>		
	<input type="submit" name="submit" class="submit" value="Get information">		
</form>	

<?php

if (isset($_POST['guitar'])) {
	foreach ($_POST['guitar'] as $i => $guitar) {
		//echo($guitar);
		$sql="SELECT * FROM guitars WHERE company='$guitar'";
		$result=$conn->query($sql);
		if ($result->num_rows>0) {
			while ($row=$result->fetch_assoc()) {
				echo '<strong>'.$row['company'].'</strong> '.$row['name'].' '.$row['type'].' '.$row['price'].'</br>';
			}
		} else {
			echo "Nothing to show</br>";
		}	
	}
}

?>