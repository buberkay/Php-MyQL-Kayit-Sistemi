<?php

$host = "localhost";
$port = "3307";
$kullaniciadi = "root";
$parola = "";
$veritabani = "kullanici";
$tablo = "kullanicilar";

$baglanti = mysqli_connect("$host:$port", $kullaniciadi, $parola, $veritabani);

if(!$baglanti){
   echo "Bağlantı başarısız";
}

?>