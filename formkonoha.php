<html>
<head>
	<title>Formulir Pegawai Negeri Konoha</title>
</head>
<body>
	<form action="tampilkonoha.php" method="post">
	<h1>Formulir Pegawai Negeri Konoha</h1>
	<table border=1 >
		<tr>
			<td colspan=2> Isi Data Di Bawah Ini : </td>
		</tr>
		
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama" size="25" maxlength="50">
			</td>
		</tr>
		
		<tr>
			<td>Alamat</td>
			<td>
				<textarea name="alamat" rows="5" cols="27"></textarea>
			</td>
		</tr>
		
		<tr>
			<td>Tempat Lahir</td>
			<td>
				<input type="text" name="tempatlahir" size="25" maxlength="50">
			</td>
		</tr>
		
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="text" name="tanggallahir" size="25" maxlength="50">
			</td>
		</tr>
		
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="jeniskel" value="Laki-laki">Laki=laki
				<input type="radio" name="jeniskel" value="Perempuan">Perempuan
			</td>
		</tr>
		
		<tr>
			<td> Pendidikan </td>
			<td>
				<select name="pendidikan">
					<option value="-Pilih-">
					<option value="S1">S1
					<option value="S2">S2
					<option value="S3">S3
				</select>
			</td>
		</tr>
		
		<tr>
			<td colspan=2 align="center">
				<input type="submit" value="Submit"><input type="reset" value="Cancel">
			</td>
		</tr>
	
	</table>
	</form>
</body>
</html>