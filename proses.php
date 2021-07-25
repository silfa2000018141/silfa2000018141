<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
    <title>POSTEST11</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="buku.css">
</head>
<body>
    <div class="header">
        <h1>Silfa Website</h1>
        <p>Your learning solution</p>
      </div>
      <div class="menu">
        <a href="home.php">Home</a>
        <a href="#">Contact Us</a>
        <a href="#">About Us</a>
        <a href="daftar.php">Pendaftaran Tamu</a>
        <a href="https://www.facebook.com/" class="fab fa-facebook-f" style="float:right"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram" style="float:right"></a>
        <a href="https://www.youtube.com/" class="fab fa-youtube" style="float:right"></a>
      </div>
          <div class="card">
            <div align="center">
                   <h2>BUKU TAMU</h2>
            <br><br>
            <?php 
            echo "<head><title>My Guest Book</head></title>"; 
            $fp = fopen("guestbook.txt","a+"); 
            $nama = $_POST["nama"];
            $alamat  = $_POST["alamat"];
            $email = $_POST["email"];
            $status = $_POST["status"];
            $komentar = $_POST["komentar"];
            fputs($fp,"$nama|$alamat|$email|$status|$komentar\n"); 
            fclose($fp); 
            echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>"; 
            echo "<a href=daftar.php> Isi Buku Tamu </a><br>"; 
            echo "<a href=bukutamu.php> Lihat Buku Tamu </a><br>"; 
            ?>
       <br><br>
        </div> 
        </div>
      <div class="footer">
        <h2>Copyright © by Silfa</h2>
      </div>
</body>
</html>