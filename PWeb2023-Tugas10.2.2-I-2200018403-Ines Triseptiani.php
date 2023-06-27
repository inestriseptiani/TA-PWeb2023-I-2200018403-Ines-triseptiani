<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 10#2</title>
</head>
<body>
	<form action="" method="POST">
		Masukkan Bintang <input type="text" name="bintang"><input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])){
		$bin = $_POST['bintang'];
		
		for ($a= $bin; $a > 0 ; $a--) {
			for ($i=1; $i <= $a ; $i++) {
				echo "&nbsp";

				
			}
			for ($a1=$bin; $a1 >= $a ; $a1--) { 
				echo "*";
			}
			echo "<br>";

		}
	}
?>