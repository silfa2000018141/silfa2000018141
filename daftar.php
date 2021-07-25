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
            </div> 
                    <form name="form1" method="POST" action="proses.php"> 
                    <table width="58%" border="0" align="center"> 
                    <tr> 
                        <td>Nama Lengkap</td> 
                        <td><input  type="text" name="nama" id="nama"></td> 
                    </tr> 

                    <tr> 
                        <td>Alamat</td> 
                        <td><input  type="text" name="alamat" id="alamat"></td> 
                    </tr>

                    <tr> 
                        <td>E-Mail</td> 
                        <td><input  type="text" name="email" id="email"></td> </tr> 
                    </tr> 

                    <tr> 
                        <td>Jenis Kelamin</td> 
                        <td>
                        <select name="status" id="status"> 
                            <option>LAKI-LAKI</option> 
                            <option>PEREMPUAN</option> 
                        </select>
                        </td> 
                    </tr> 
                    <tr> 
                        <td>Status</td> 
                        <td>
                        <select name="status" id="status"> 
                            <option>Menikah</option> 
                            <option>Single</option> 
                        </select>
                        </td> 
                    </tr> 

                    <tr> 
                        <td>Komentar</td> 
                        <td><textarea name="komentar" id="komentar"></textarea></td> 
                        </textarea>
                    </tr> 
                    <tr> 
                    <td>&nbsp;</td> 
                    <td><input type="submit" name="Submit" value="Kirim"><input 
                    type="reset" 
                    name="Submit2" value="Batal"> 
                    </td> 
                    </tr> 
                    </table> 
                    </form> 
                    <br><br>
        </div>
       
        </div>
      <div class="footer">
        <h2>Copyright © by Silfa</h2>
      </div>
</body>
</html>