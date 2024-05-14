<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Formu</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    
<?php 
   function VeriEkleme(){
    include "connection.php";
    $tc=$_POST["tc"];
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $tel=$_POST["telefon"];
    $eposta=$_POST["eposta"];
    $adres=$_POST["adres"];

    if(!empty($tc) && !empty($tel) && strlen($tc)==11 && strlen($tel)==10){
      $ekle = "INSERT INTO kullanicilar (tc_no,ad,soyad,tel_no,eposta,adres) VALUES ('$tc','$ad','$soyad','$tel','$eposta','$adres')";
      $calistir = mysqli_query($baglanti,$ekle);
      echo '<script>alert("Kayıt başarılı!");</script>';
    }
    else{
      echo '<script>alert("Girilen bilgilerinizi kontrol ediniz.");</script>';
    }
    mysqli_close($baglanti);
   }

  if(isset($_POST["kaydol"]))
  {
    veriEkleme();
  }

?>

<form action="kaydol.php" method="POST">
  <div class="container">

    <hr>
    <label><b>TC Kimlik Numarası</b></label>
    <input type="text" placeholder="11111111111" name="tc" id="tc" required>

    <label><b>Ad</b></label>
    <input type="text" name="ad" id="ad" required>

    <label><b>Soyad</b></label>
    <input type="text" name="soyad" id="soyad" required>

    <label><b>Telefon Numarası</b></label>
    <input type="text" placeholder="5555555555" name="telefon" id="telefon" required>

    <label><b>E-posta</b></label>
    <input type="email" placeholder="xxx@xxx.com" name="eposta" id="eposta" required>

    <label><b>Adres</b></label>
    <input type="text" name="adres" id="adres" required>
    <hr>

  </div> 
  <button type="submit" class="registerbtn" name="kaydol">Kaydol</button>
</form>

</body>
</html>