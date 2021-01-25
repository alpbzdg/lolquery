<?php 

include 'Ayarlar/db_baglan.php';

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/kayitol.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
  </head>
  <body>
    <br />
  <center>  <h1>ÜCRETSİZ KAYIT!</h1></center>

<div class="orta-kisim">

 <br />
<form method="post">
   Ad Soyad<br />
   <input type="text" name="adsoyad"><br />
   Mail<br />
   <input type="text" name="mail"><br />
   Şifre<br />
   <input type="password" name="sifre"><br />
    Telefon<br />
   <input type="text" name="telefon"><br />
   Cinsiyet<br />

   <select name="gender">
        <option value="Erkek" selected>Erkek</option>
        <option value="Kadın">Kadın</option>
  </select>

    <br />
   
   <br />

   <button class="kaydet" name="kayitol">KAYIT OL</button>
     <br />

     <a class="goback" href="/login.php">Geri Dön!</a>

</form>


<?php 

    if($_POST){
        
        $adsoyad = $_POST["adsoyad"];
        $mail = $_POST["mail"];
        $sifre= $_POST["sifre"];
        $cinsiyet = $_POST["gender"];
        $telefon = $_POST["telefon"];
        
        
        $sorgu = "INSERT INTO users (user_email,user_password,user_fullname,user_phone,user_gender)
            VALUES ('$mail','$sifre','$adsoyad','$telefon','$cinsiyet')";
        
        $sonuc = mysqli_query($baglan, $sorgu);
        
        if($sonuc){
            echo "<center><font color='white'>Kayıt Başarılı!</font></center>";
        }else {
            echo "<font color='red'>Bir Hata Oluştu</font>";
        }
        
        
        
    }



?>


</div>

  </body>
</html>
