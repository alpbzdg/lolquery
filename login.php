<?php 

include 'Ayarlar/db_baglan.php';
session_start();

if(!$_SESSION["oturum"]){
    
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>LOL QUERY</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
  </head>

  <body>
    <?php 
    
    
    if($_POST){
        
        $mail = $_POST["mail"];
        $sifre = $_POST["sifre"];
        
        $giris_sorgu = "SELECT * FROM users WHERE user_email = '$mail' AND  user_password = '$sifre'";
    $sorgu_gerceklestir = mysqli_query($baglan,$giris_sorgu);
    $satir_say = mysqli_num_rows($sorgu_gerceklestir);
          
          if($satir_say > 0){

        $satir = mysqli_fetch_array($sorgu_gerceklestir);
        
        $_SESSION['online'] = true;
        $_SESSION['user_id'] = $satir['user_id'];
        $_SESSION['user_fullname'] = $satir['user_fullname'];
        $_SESSION['user_phone'] = $satir['user_phone'];
        $_SESSION['user_photo'] = $satir['user_photo'];
        $_SESSION['user_email'] = $satir['user_email'];
        $_SESSION['user_gender'] = $satir['user_gender'];
        
        $id = $satir['user_id'];
        $mail = $satir['user_email'];
        
        $onay_sorgu = "SELECT * FROM game_users where user_email = '$mail'";
        $sorgu_yap = mysqli_query($baglan, $onay_sorgu);
        
        $onay_say = mysqli_num_rows($sorgu_yap);
        
            if($onay_say > 0){
                
                $say = mysqli_fetch_array($sorgu_yap);
                $_SESSION['gamer_username'] = $say['gamer_username'];
                $_SESSION['gamer_server'] = $say['gamer_server'];
                $_SESSION['onay'] = $say['onay'];
            }
        
        
        
        header("Location: anasayfa.php");
        
        
        $online_sorgu = "UPDATE users SET user_durum = 1 WHERE user_id = '$id' ";
        mysqli_query($baglan, $online_sorgu);
        
        
        

      }else {
        echo "<center><font color='red'>Böyle Bir Kullanıcı Bulunamadı</font></center>";
        header('refresh: 2');
      }
        
        
        
        
    }if(isset($_SESSION["online"])){

      header("Location: anasayfa.php");
      //oturum acanlar burayı görecek.

    }else {

      echo '<div class="orta-kisim">

      <img src="img/LogoSade.png" style="height: 100px;margin: 0 auto;position: absolute;margin-top: 40px;margin-left: 93px;">
      <br>
      <h4 style="position: Absolute;margin-top: 104px;margin-left: 51px;color: #a37c30;font-weight: bold;font-size: 21px;">SİHİRDAR GÜNLÜĞÜ</h4>

      <form method="post">

      Mail Adresiniz <br />

      <input type="text" name="mail"><br />

      Şifre <br />
      <input type="password" name="sifre"><br /><br />

      <input type="submit" value="GİRİŞ YAP"><br /> <br />

      <a href="/kayit_ol.php">Kayıt Ol!</a>


    </form>
    </div>';
      // oturum acılmadıysa burası gözükecek.


    }
    
    
    
    
    ?>
    





  </body>
</html>

<?php 


}else{
    header("Location: sabir.php");
}



?>