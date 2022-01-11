<html>
<head>
	<title>Input Mahasiswa</title>
</head>
<body bgcolor="CornflowerBlue">
	<form action="tampilmahasiswa.php" method="post">
		<b>PENGELOLAAN DATA MAHASISWA</b>
		<br>
	
		<pre>
Nama	: <input type="text" name="nama" size="25" maxlength="50">
Alamat	: <input type="text" name="alamat" size="25" maxlength="50">
		</pre>
	
		Jenis Kelamin	:
		<input type="radio" name="jeniskel" value="Laki-laki">Laki=laki
		<input type="radio" name="jeniskel" value="Perempuan">Perempuan
	
		<p>
		Pekerjaan	:
		<select name="pekerjaan">
			<option value="-Pilih-">
			<option value="Pelajar">Pelajar
			<option value="Karyawan">Karyawan
			<option value="Wirausaha">Wirausaha
			<option value="Lain-lain">Lain-lain
		</select>
	
		<p>
		Hobi		:
		<input type="checkbox" name="hobi" value="Olahraga">Olahraga
		<input type="checkbox" name="hobi" value="Musik">Musik
		<input type="checkbox" name="hobi" value="Jalan-jalan">Jalan-jalan
	
		<p>
		<input type="submit" value="Kirim"><input type="reset" value="Batal">
	</form>
</body>
</html>