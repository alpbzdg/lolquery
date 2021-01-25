<?php

session_start();
include 'Ayarlar/db_baglan.php';



if($_SESSION["online"]){
    
 ?>




<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="img/favicon.ico"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

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
        
        
        <script>
            
            function hover(element) {
              element.setAttribute('src', 'https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-navigation/global/default/button-ticker-blue-hover.png');
            }
            
            function unhover(element) {
              element.setAttribute('src', 'https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-navigation/global/default/button-ticker-blue.png');
            }
            
            $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
                    
                        
        </script>
        
        <a class="logo" href="sitemizxd.php"><img style="height: 52px;position: absolute;margin-top: -3px;" src="http://lolquery.codingtr.com/img/LogoSade.png"><font style="position: absolute;margin-left: 61px;margin-top: 10px;font-size: 14pt;font-weight: bold;color:#a37c30;">Sihirdar Günlüğü</font></a>
        
        
        <img height="30px" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Yeni Kayıt Olduysanız Lütfen <br> Oynamakta <br> Olduğunuz Hesabınızın<br> Kullanıcı Adı (Oyun İçi)'nı Oyuncu ekle kısmına yazınız." style="position:absolute;margin-left:-50px;margin-top:10px;cursor:help;" width="30px"onmouseover="hover(this);" onmouseout="unhover(this);" src="https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-navigation/global/default/button-ticker-blue.png">
        
       <div class="menu">
           
           <ul>
               <li><a href="tft.php">Taktik Savaşları</a></li>
               <li><a href="javascript:;">Canlı Maç Sorgu</a></li>
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
    <br>
    <br>
    <center><h1>KULLANICI AYARLARI GÜNCELLEME</h1></center><br><br>
    
 <center><a class="oyuncu-link" target="_blank" href="oyuncu_ekle.php" glose="Bu bölümde kendi hesabınızı ekleyip özelleştirebilirsiniz!">OYUNCU EKLE</a></center> 
    <br>
    <br>
    <div class="guncelle">
   <form method="post">
       <center>
           <br>
       E-Mail Değiştir<br>
       <input type="text" name="mail" value="<?php echo $_SESSION["user_email"];?>"><br>
       
       Şifre Değiştir<br>
       <input type="password" name="sifre" ><br>
       
       İsim Soyisim Değiştir<br>
       <input type="text" name="isim" value="<?php echo $_SESSION["user_fullname"];?>"><br>
       
       Telefon Değiştir<br>
       <input type="text" name="phone" value="<?php echo $_SESSION["user_phone"];?>"><br>
       
       Cinsiyet<br>
       <select name="gender">
           
           <option value="Erkek">Erkek</option>
           <option value="Kadın">Kadın</option>
           
       </select><br><br>
       
       <input type="submit" value="Güncelle"><br><br>
       <a class="geri-don" href="sitemizxd.php">Geri Dön</a><br>
       </center>
       
       
   </form>
   
   <?php 
   
   if($_POST){
       
       $id= $_SESSION["user_id"];
       $posta = $_POST["mail"];
       $sifre = $_POST["sifre"];
       $isim = $_POST["isim"];
       $telefon = $_POST["phone"];
       $cinsiyet = $_POST["gender"];
       
       $sorgumuz = "UPDATE users SET user_email='$posta', user_password = '$sifre' , user_fullname = '$isim' , user_phone = '$telefon' , user_gender = '$cinsiyet' WHERE user_id = '$id'";
       
       $sonuc = mysqli_query($baglan,$sorgumuz);
       
       if($sonuc){
           echo "<center><font color='green'>İşleminiz Başarılı Bir Şekilde Gerçekleştirildi.</font></center>";
       }else{
           echo "<center><font color='red'>İşleminiz Gerçekleştirilemedi.</font></center>";
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