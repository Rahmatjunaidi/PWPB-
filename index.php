<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    </head>

<body  class="body" background="2.gif">
   

    <form action="formulir.php" method="post">
        <!-- Ini adalah input text nama -->
        <label for="nm">Nama : </label>
        <input type="text" name="nama" id="nm" placeholder="Ketikkan Disini"> <br> <br>

        <!-- Ini adalah input text password -->
        <label for="pass">Password : </label>
        <input type="password" name="password" id="pass"> <br> <br>

        <!-- Ini adalah radio button jenis kelamin -->
        <label for="">Jenis Kelamin : </label>
        <input type="radio" name="jk" value="Laki-Laki" id="jkl" checked> 
        <label for="jkl">Laki-Laki</label>
        <input type="radio" name="jk" value="Perempuan" id="jkm">
        <label for="jkm">Perempuan</label> <br> <br>

        <!-- Ini adalah checkbox Hobi -->
        <label for="">Hobi : </label>
        <input type="checkbox" name="hobi[]" id="bc" value="Badminton">
        <label for="bc">Badminton</label>
        <input type="checkbox" name="hobi[]" id="bc" value="Menari">
        <label for="bc">Menari</label>
        <br>
        <input type="checkbox" name="hobi[]" id="bc" value="Menyanyi">
        <label for="bc">Menyanyi </label>
        <input type="checkbox" name="hobi[]" id="bc" value="Memasak">
        <label for="bc">Memasak</label>
        <br>
        <input type="checkbox" name="hobi[]" id="bc" value="Fotografi">
        <label for="bc">Fotografi</label>
        <input type="checkbox" name="hobi[]" id="nls" value="Berenang">
        <label for="nls">Berenang </label>
        <br>
        <input type="checkbox" name="hobi[]" id="bc" value="Menulis">
        <label for="bc">Menulis</label>
        <input type="checkbox" name="hobi[]" id="mcg" value="Basket">
        <label for="mcg">Basket</label> <br> <br>

        <!-- Ini adalah selection / combo box asal kota -->
        <label for="asl">Asal Kota : </label>
        <select name="asal_kota" id="asl">
            <option value="Tangerang Selatan">Tangerang Selatan</option>
            <option value="Bogor">Bogor</option>
            <option value="Depok">Depok</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Bandung">Bandung</option>
            <option value="Medan">Medan</option>
            <option value="Binjai">Binjai</option>
            <option value="Sabang">Sabang</option>
        </select> <br> <br>

        <!-- Ini adalah input text komentar-->
        <label for="kmntr">Komentar Anda</label>
        <br>
        <br>
        <textarea name="komentar_Anda" id="kmntr" placeholder="Silahkan masukkan komentar anda...." rows=3" cols="80"></textarea> <br><br><br>

        <!-- Ini adalah tombol submit -->
        <input type="submit" name="submit" value="Mulai Proses!">
    </form>
</body>
<hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2021 Rahmat Nasution.</p>
        <h4><a href="https://www.instagram.com/n.raahmatt/">FOLLOW ME!></a></h4>
        <h4><a href="https://wa.me/+6289688139965">WHATSAPP ME!</a></H4>
</html>