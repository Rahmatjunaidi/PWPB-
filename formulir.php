<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahmat Junaidi Personal Website</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
   
    </head>

<body  class="body" background="2.gif">
    <nav>
        <a href="index.html">Home</a> |
        <a href="cv-rahmat.pdf">Download CV</a> |
        <a href="contact.html">Contact</a> |
        <a href="about.html">About me</a>

    <center><h1>Data yang di Proses</h1></center>
</body>
</html>
<?php
if(isset($_POST['submit'])){
        $nm = $_POST['nama'];
        $pass = $_POST['password'];
        $jk = $_POST['jk'];
        $askot = $_POST['asal_kota'];
        $komentar = $_POST['komentar_Anda'];
      
        echo "<p>Nama : $nm </p> <hr>";
        echo "<p>Password : $pass</p> <hr>";
        echo "<p>Jenis Kelamin : $jk</p> <hr>";
        echo "Hobi :";
        foreach ($_POST['hobi'] as $h){
        echo " $h, ";}
        echo "<hr>";
        echo "<p>Asal Kota : $askot</p> <hr>";
        echo "<p>Komentar Anda : $komentar </p> <hr>";
       
    }
?>
<hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2021 Rahmat Nasution.</p>
        <h4><a href="https://www.instagram.com/n.raahmatt/">FOLLOW ME!></a></h4>
        <h4><a href="https://wa.me/+6289688139965">WHATSAPP ME!</a></H4>