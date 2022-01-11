<html>
    <head>
        <title> Input Mahasiswa</title>
    </head>
    <body bgcolor="green">
        <form action="tampilmahasiswa.php" method="post">
    
    <b>Pengelolaan data Mahasiswa</b>
    <br><pre>
        Nama    : <input type="text" name="nama" size="25" maxlength="50">
        Alamat  : <input type="text" name="alamat" size="25" maxlength="50">
    </pre>
    Jenis Kelamin:
    <input type="radio" name="jeniskel" value="laki-laki">Laki-Laki
    <input type="radio" name="jeniskel" value="perempuan">Perempuan
    <p>
        Pekerjaan   :
    <select name="pekerjaan">
        <option value="-Pilih-">
        <option value="Pelajar">Pelajar
        <option value="Karyawan">Karyawan
        <option value="Wirausaha">Wirausaha
        <option value="Lain-Lain">Lain-Lain
    </select>
    </p>
    Hobi:
    <input type="checkbox" name="hobi" value="olahraga">Melukis
    <input type="checkbox" name="hobi" value="musik">Olahraga
    <input type="checkbox" name="hobi" value="jalan-jalan">Jalan-Jalan
    <p>
        <input type="submit" value="Kirim"><input type="reset" value="Batal">
    </p>
    </form>
</body>
</html>