<html>
<head>
	<title>DATA MAHASISWA</title>
</head>
<body>
	<?php
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$jeniskel=$_POST['jeniskel'];
		$pekerjaan=$_POST['pekerjaan'];
		$hobi=$_POST['hobi'];
	?>
	
	<table border=1 bgcolor="LightSalmon">
		<tr>
			<td colspan=2 align="center"><b>DATA MAHASISWA</b></td>
		</tr>
		
		<tr>
			<td>Nama</td>
			<td><?php echo $nama;?></td>
		</tr>
		
		<tr>
			<td>Alamat</td>
			<td><?php echo $alamat;?></td>
		</tr>
		
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $jeniskel;?></td>
		</tr>
		
		<tr>
			<td>Pekerjaan</td>
			<td><?php echo $pekerjaan;?></td>
		</tr>
		
		<tr>
			<td>Hobi</td>
			<td><?php echo $hobi;?></td>
		</tr>
	</table>
	
	<a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>