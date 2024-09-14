<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA GURU - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH GURU</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NUPTK</th>
			<th>Nama</th>
			<th>Golongan</th>
			<th>Jenis Kelamin</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbl_guru");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nuptk']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['golongan']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td>
					<a href="edit.php?nuptk=<?php echo $d['nuptk']; ?>">EDIT</a>
					<a href="hapus.php?nuptk=<?php echo $d['nuptk']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>