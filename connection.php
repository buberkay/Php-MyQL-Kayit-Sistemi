<?php

$host = "localhost:3307";
$kullaniciadi = "root";
$parola = "";
$veritabani = "kullanici";
$tablo = "kullanicilar";


$baglanti = mysqli_connect($host, $kullaniciadi, $parola, $veritabani);

if($baglanti){

}
else
   {echo "Bağlantı başarısız";}

@mysqli_select_db($baglanti, $veritabani);

?>