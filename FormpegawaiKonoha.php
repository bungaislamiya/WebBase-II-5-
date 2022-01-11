<html>
<head>
<title>Formulir Pegawai Negeri Konoha</title>
</head>
<body bgcolor="bluesky">
<form action="pegawainegrikonoha.php" method="post">
<b>PENGOLAAN FORMULIR PEGAWAI</b>
<br>
<pre>
Nama : <input type="text" name="nama" size="25" maxlength="50">
Alamat : <input type="text" name="alamat" size="25" maxlength="50">
</pre>
Jenis Kelamin :
<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
<input type="radio" name="jeniskel" value="Perempuan">Perempuan
<p>
Pekerjaan :
<select name="pekerjaan">
<option value="Mahasiswa">Mahasiswa
<option value="Karyawan">Karyawan
<option value="Wirausaha">Wirausaha
<option value="Lain-Lain">Lain-Lain-L
</select>
<p>
Hobi :
<input type="checkbox" name="hobi1" value="Melukis">Melukis
<input type="checkbox" name="hobi2" value="Jalan-Jalan">Jalan-Jalan-Ja
<p>
<input type="submit" value="Kirim"><input type="reset" value="Batal">
</form>
</body>
</html>