<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA GURU - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA GURU</h3>

	<?php
	include 'koneksi.php';
	$nuptk = $_GET['nuptk'];
	$data = mysqli_query($koneksi,"select * from tbl_guru where nuptk='$nuptk'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NUPTK</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nuptk']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Golongan</td>
					<td><input type="select" name="nim" value="<?php echo $d['golongan']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="radio_button" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>