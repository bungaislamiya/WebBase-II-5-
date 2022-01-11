<html>
    <head><title>
        Data Input pegawai
    </title></head>
    <body>
        <form action="output.php" method="post">
            <b>Masukan Identitas anda</b>
                <table border=1>
                    <tr>
                        <td colspan="2">Isi data di bawah ini:  </td>
                    </tr>
                    <tr><td>Nama : </td><td><input type="text"name="nama"></td>
                    </tr>
                    <tr><td>alamat: </td><td><textarea name="alamat" cols="22" rows="10"></textarea></td></tr>
                    <tr><td>Tempat Lahir</td><td><input type="text" name="tpt"></td></tr>
                    <tr><td>Tanggal Lahir:</td><td><input type="text"name="tgl"></td></tr>
                    <tr><td>Jenis Kelamin:</td><td><input type="radio"name="jk"value="Laki-Laki">Laki-Laki
                                                    <input type="radio"name="jk"value="perpemuan">Perempuan</td></tr>
                    <tr><td>Pendidikan</td><td><select name="pendidikan">
                        <option value="sma">SMA
                        <option value="s1">S1
                        <option value="s2">S2
                        <option value="s3">S3
                    </select></td></tr>
                    <tr><td align= "center" colspan="2"><input type="submit" name="submit" value=submit>
                                                        <input type="reset" name="reset" value="reset"></td></tr>
                </table>
   
        </form>
    </body>
</html>