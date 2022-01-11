<html>
    <head><title>Input Komputer</title></head>
    <body>
        <h1>Buku Tamu</h1>
        <hr/>
        <pre><h3>
Komentar dan Saran Anda Sangat Kami Butuhkan
Untuk Meningkatkan Kualitas Situs Kami</h3>
        </pre>
        <form action="tampilkankomentar.php"method="post">
        Nama Anda  : <input type="text"name="nama"size="25"><br/>
        Email Anda : <input type="text"name="email"size="25"><br/>
        Komentar   : <textarea rows="5" cols="30"name="kom"></textarea><br/>
        <input type="submit"name="submit"value="Kirim">
        <input type="reset" name="reset" value="Batal">
        </form>
    </body>
</html>