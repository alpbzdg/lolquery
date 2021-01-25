<?php

session_start();
include 'Ayarlar/db_baglan.php';
    
$mail = $_SESSION["user_email"];
    
    $onay_sorgu = "SELECT * From game_users WHERE user_email = '$mail'";
       $onay_sorgu_yap = mysqli_query($baglan,$onay_sorgu);
            if($onay_sorgu_yap){
                if(mysqli_num_rows($onay_sorgu_yap) > 0){
                    $onay_query = mysqli_fetch_array($onay_sorgu_yap);
                    $onay = $onay_query["onay"];
                    $gamer_server = $onay_query["gamer_server"];
                    $username = $onay_query["gamer_username"];
                    
                }
            }



if($_SESSION["online"]){
    
 ?>




<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body>
    
<?php 
/*echo "Kullanici Bilgileri : <br />";
echo "Kullanici Mail : ".$_SESSION["user_email"]."<br />";
echo "Kullanici İsim :".$_SESSION["user_fullname"]."<br />";
echo "Kullanici Telefon :".$_SESSION["user_phone"]."<br />";
echo "Kullanici Foto Url:".$_SESSION["user_photo"]."<br />";
echo "Kullanici Cinsiyet:".$_SESSION["user_gender"]."<br />";
*/
?>


<div class="nav-bar">
    
    <div class="nav-icerik">
        
        
    
        
        <a class="logo" href="sitemizxd.php"><img style="height: 52px;position: absolute;margin-top: -3px;" src="http://lolquery.codingtr.com/img/LogoSade.png"><font style="position: absolute;margin-left: 61px;margin-top: 10px;font-size: 14pt;font-weight: bold;color:#a37c30;">Sihirdar Günlüğü</font></a>
        
        
      <div class="menu">
           
           <ul>
               <li><a href="tft.php">Taktik Savaşları</a></li>
               <li><a href="canli_mac.php">Canlı Maç Sorgu</a></li>
               <li><a href="profil_sorgu.php">Profil Sorgu</a></li>
               <li><a href="javascript:;">Duo Bul</a></li>
               <li><a href="SosyalMedya/index.php">Sosyal Medya</a></li>
               <li><a class="ayarlar" href="ayarlar.php"><i class="fas fa-cog"></i> Ayarlar</a></li>
               <li><a href="cikis_yap.php"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
           </ul>
           
           
       </div>
      
        
    </div>
    
</div>

<div class="orta-icerik">
   
   <br />
   <br />
   
   <?php 
   
    if($onay == 2){

   ?>
<br><br><br><br><br>
 <center><h1 style="">OYUNCU EKLEME EKRANI</h1>
   
   <div class="alert alert-danger" role="alert">
  ONAY İŞLEMİNİZ TARAFIMIZA İLETİLMİŞTİR. ONAYLAMA İŞLEMİ 24 SAATE KADAR TAMAMLANMAKTADIR. ARA SIRA BU SAYFAYI YENİLEYİNİZ.
    </div>
   
   
  </center> 
   
   <?php 
        
   
    }else if($onay == 1){
        
 
      ?>  
        
               <div class="alert alert-success" role="alert">
           <center>HALİ HAZIRDA "<?php echo $username;?>" DİYE BİR KARAKTERİNİZ BULUNMAKTADIR.</center> 
               </div>
        <center>SMURF HESAP MI EKLEMEK İSTİYORSUNUZ? <a href="javascript:;">Tıklayınız.</a></center>
        
    
        
        
<?php        
        
        
    }else{
   ?>
   
  <center><h1 style="">OYUNCU EKLEME EKRANI</h1>
    
    <div class="alert alert-warning" role="alert">
 Eklediğiniz Oyuncu İle Duo Bulma İşlemleri gibi bir çok işlem yapacaksınız. Oyuncu Nickini Doğru Yazmayan Oyuncular Sitemizden Uzaklaştırılacaklardır.
</div>
    
  </center> 
   <br />
   <br />
   
   <div class="ekle-oyuncu">
   
    <form id="form1" method="post">
        
       <span class="isim">Oyuncu nick : </span><input type="text" name="nick">
        
       <span style="margin-left:284px;" class="server">Server : </span><select style="margin-top:5px;" class="server-cl" name="server">
            <option value="tr1">TR</option>
            <option value="eun1">EUNE</option>
            <option value="euw1">EUW</option>
            <option value="jp1">JP</option>
            <option value="kr">KR</option>
            <option value="la1">LAN</option>
            <option value="la2">LAS</option>
            <option value="na1">NA</option>
            <option value="oc1">OCE</option>
            <option value="ru">RU</option>
            <option value="pbe1">PBE</option>
                </select>
        
        <button class="btn">
           <i style="margin-top:-13px;margin-left:-20px;" id="arti" class="fas fa-plus-circle fa-3x"></i>
        </button>
        
        
    </form>
    
    <?php 
    
    if($_POST){
        
        $kadi = $_POST["nick"];
        $sv = $_POST["server"];
        
        $onay = 2;
        
        $ekle ="INSERT INTO game_users (user_email,gamer_username,gamer_server,onay)
            VALUES ('$mail','$kadi','$sv','$onay')";
        
        $ekle_sorgu = mysqli_query($baglan,$ekle);
        
        if($ekle_sorgu){
            echo '<div class="alert alert-success" role="alert">
                      Oyuncu Ekleme Başarılı!
                    </div>';
                    
            header("Location: http://lolquery.codingtr.com/oyuncu_ekle.php");
        }else {
            echo "<br /><br /><div style='color:red;' class='olumlu'>OYUNCU EKLENEMEDİ</div>";
        }
        
        
    }
    
    
    }
    ?>
    
    
    
    </div>

    
    
    
    
</div>






</body>




</html>


<?php 

}else {
    header("Location: login.php");
}


?>