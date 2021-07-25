<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTEST10</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <?php
    $file_counter = 'counter.txt';
    $f_open = fopen($file_counter, "r+");
    $hitung =  fread($f_open, filesize($file_counter));
    fclose($f_open);
    $f_open = fopen($file_counter, "w+");
    $hitung = $hitung + 1;
    fwrite($f_open, $hitung, strlen($hitung));
    fclose($f_open);
    ?>
    <div class="header">
        <h1>silfa Website</h1>
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
            <h2>About Us</h2>
            <p>By <b>Silfa</b> 25 Oktober 2001 </p>
            <div class="fakeimg" style="height:500px;"></div>
            <p>Halo, perkenalkan nama saya Silfa bisa dipanggil Cipa Saya berasal dari Sulawesi Tenggara
            ,Kuliahnya Di UAD Fakultas Teknologi Industri Jurusan Teknik Informatika, Hobi Saya Adalah mendengar Musik Dan Membaca.</p>
        </div>
        <div class="right">
            <h2>Jumlah Pengunjung</h2>
        <h3><?php echo $hitung ?> </h3>
        </div>
        <div class="rightbot">
            <h2>UPLOUD FILE</h2>
            <form enctype="multipart/form-data" method="post" action="proses2.php"> 
            <div class="choose">
                <input type="file" name="fupload"><br><br>
            </div>
              Deskripsi File : <br><textarea name="deskripsi" rows="6" cols="20">
              </textarea><br> 
              <input type=submit value=Upload> 
              </form>
        </div>
      <div class="footer">
        <h2>Copyright © by Silfa</h2>
      </div>
</body>
</html>