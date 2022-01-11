<html>
    <head>
        <title>Data Komputer</title>
    </head>
    <body><?php
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $komentar=$_POST["kom"];
    $komentar=$_POST["kom"];
    ?>
        <h1>Data Komentar Anda</h1>
<hr/>
        Nama Anda  : <?php echo$nama;?><br>
        Email Anda : <?php echo$email;?><br>
        Komentar   : <?php echo$komentar;?><br>
        <a href="forminputkomputer.php">INPUT DATA LAGI </a>
    </body>
</html>