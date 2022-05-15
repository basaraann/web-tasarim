<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="g211210015@sakarya.edu.tr";
    $sifre="123";
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $parola=$_POST["parola"];
    if($kullaniciAdi!="" && $parola!=""){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo 'Hoşgeldiniz,Giriş İşleminiz tamamlanmıştır.G211210015 <a href="index.html">ANA SAYFA İÇİN</a> <br><hr>';
            echo "$kullaniciAdi";
        }
        else{
            header("Location:../NEW/LOGİN.html");
        }
    }
    else{
        header("Location:../NEW/LOGİN.html");
    }
}
else {
    header("Location:../NEW/LOGİN.html");
}
?>