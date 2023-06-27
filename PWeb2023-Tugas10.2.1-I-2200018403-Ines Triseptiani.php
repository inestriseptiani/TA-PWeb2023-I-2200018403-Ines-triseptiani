<html>
<head>
	
	<title>Tugas 10</title>
</head>
<body>
	<form id="form1" name="form1" method="post" action="">
		<table>
			<tr>
				<td>
					Masukkan Nama Anda
				</td>
				<td>
					: <input type="text" name="nama" id="nama">
				</td>
				<td>
					Masukkan nilai anda
				</td>
				<td>
					: <input type="text" name="nilai" id="nilai">
				</td>
			</tr>
			<td colspan="2">
				<input type="submit" name="submit" value="kirim data" id="submit">
			</td>
		</tr>
		</table>
	</form>

	<?php
if(isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nilai = $_POST['nilai'];
	$nilaihuruf = "";

	if (($nilai >= 80.00) && ($nilai <= 100.00)){
		$nilaihuruf = "A";
	}
	elseif (($nilai >= 76.25) && ($nilai <= 79.99)) {
		$nilaihuruf = "A-";
	}
	elseif (($nilai >= 68.75) && ($nilai <= 76.24)) {
		$nilaihuruf = "B+";
	}
	elseif (($nilai >= 65.00) && ($nilai <= 68.74)) {
		$nilaihuruf = "B";
	}
	elseif (($nilai >= 62.50) && ($nilai <= 64.99)) {
		$nilaihuruf = "B-";
	}
	elseif (($nilai >= 57.50) && ($nilai <= 62.49)) {
		$nilaihuruf = "C+";
	}
	elseif (($nilai >= 55.00) && ($nilai <= 57.49)) {
		$nilaihuruf = "C";
	}
	elseif (($nilai >= 51.25) && ($nilai <= 54.99)) {
		$nilaihuruf = "C-";
	}
	elseif (($nilai >= 43.75) && ($nilai <= 51.24)) {
			$nilaihuruf = "D";
	}
	elseif (($nilai >= 40.00) && ($nilai <= 43.74)) {
		$nilaihuruf = "D+";
	}
	elseif (($nilai >= 00.00) && ($nilai <= 39.99)) {
		$nilaihuruf = "E";
	}

	echo "====BIODATA NILAI MAHASISWA====<br>";
	echo "Nama Mahasiswa : $nama <br>";
	echo "Nilai Angka    : $nilai  <br>";
	echo "Nilai Huruf    : $nilaihuruf <br>";
	echo "===============================<br>";
}
?>


</body>
</html>