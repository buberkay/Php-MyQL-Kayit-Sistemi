<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Formu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #1e3799;
            color: white;
            padding: 12px 20px;
            margin: 2px auto;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 50%;
            display: block;
        }

        button:hover {
            background-color: #0c2461;
        }

        hr {
            border: 1px solid #f2f2f2;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
<?php 
include "connection.php";

if(isset($_POST["kaydol"]))
{
    $id=$_POST["tc"];
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $tel=$_POST["telefon"];
    $email=$_POST["email"];
    $adres=$_POST["adres"];

    $ekle = "INSERT INTO kullanicilar (tc_no,ad,soyad,tel_no,eposta,adres) VALUES ('$id','$ad','$soyad','$tel','$email','$adres')";
    $calistir = mysqli_query($baglanti,$ekle);
}

mysqli_close($baglanti);

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
    <input type="email" placeholder="xxx@xxx.com" name="email" id="email" required>

    <label><b>Adres</b></label>
    <input type="text" name="adres" id="adres" required>
    <hr>

  </div> 
  <button type="submit" class="registerbtn" name = "kaydol">Kaydol</button>
</form>


</body>
</html>