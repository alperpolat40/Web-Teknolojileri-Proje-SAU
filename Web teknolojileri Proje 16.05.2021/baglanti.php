<?php

$vt_sunucu="sql105.epizy.com";
$vt_kullanici="epiz_28620908";
$vt_sifre="08ENYroi1cRFB";
$vt_adi="epiz_28620908_kirsehir";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}


?>