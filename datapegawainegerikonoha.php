<html>
<head>
<title>DATA PEGAWAI NEGERI KONOHA</title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jeniskel=$_POST['jeniskel'];
$pekerjaan=$_POST['pekerjaan'];
$hobi=$_POST['hobi'];
?>
<table border=1 bgcolor="white">
<tr>
<td colspan=2 align="center"><b>DATA PEGAWAI NEGERI KONOHA</b></td>
</tr>
<tr>
<td>Nama</td></td><?php echo $nama;?></td>
</tr>
<tr>
<td>Alamat</td></td><?php echo $alamat;?></td>
</tr>
<tr>
<td>Jenis Kelamin</td></td><?php echo $jeniskel;?></td>
</tr>
<tr>
<td>Pekerjaan</td></td><?php echo $pekerjaan;?></td>
</tr>
<tr>
<td>Hobi</td></td><?php echo $hobi1,",", $hobi2,",",;?></td>
</tr></table>
<a href="datapegawainegrikonoha.php">INPUT DATA LAGI</a>
</body>
</html>
