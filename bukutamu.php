<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
    <title>bukutamu</title>
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
        <a href="bukupengunjung.php">Pendaftaran Tamu</a>
        <a href="https://www.facebook.com/" class="fab fa-facebook-f" style="float:right"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram" style="float:right"></a>
        <a href="https://www.youtube.com/" class="fab fa-youtube" style="float:right"></a>
      </div>
          <div class="card">
              <center> <h1>DAFTAR PENGUNJUNG</h1> </center>
              <br><br><br><br><br><br>
          <?php 
                echo "<head><title>My Guest Book</title></head>"; 
                $fileguest = 'guestbook.txt';
                $fp = fopen($fileguest, "r"); 
                echo "<table border=0>";
                $no = 1;
                while ($isi = fgets($fp)) 
                { 
                $pisah = explode("|",$isi); 
                echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; 
                echo "<tr><td>Pengunjung </td><td>: $no</td></tr>"; 
                echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; 
                echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>"; 
                echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>"; 
                echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>"; 
                echo "<tr><td>Komentar </td><td>: $pisah[4]</td></tr> 
                <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; 
                $no++;
                } 

                echo "</table>"; 
            ?>
            <br><br><br><br><br><br>
          </div>
      <div class="footer">
        <h2>Copyright © by Silfa</h2>
      </div>
</body>
</html>