<?php

$sunucu = "185.50.71.32";
$sifre = "159705Fu";
$veritabani = "codingtr_lolquery";
$kullanici = "codingtr_furkan";

$baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);




session_start();

    $link = $_GET["link"];
    
    




if($_SESSION["online"]){
    
 ?>




<html>
<head>
<meta charset="UTF-8">
<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<link rel="stylesheet" href="css/haber.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="img/favicon.ico"/>

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
        
        
    <a class="unlem" glose="Yeni Kayıt Olduysanız Lütfen Ayarlar Bölümünden Oynamakta Olduğunuz Hesabınızın Kullanıcı Adı (Oyun İçi)'nı yazınız." style="color:yellow;position:absolute;margin-left:-40px;margin-top:17px" href="javascript:;"><i class="fas fa-exclamation-triangle"></i></a>
        
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
<div class="kapsar">
<div class="orta-icerik">
      <br>
        <br>
          <br>
            <br>
            
            <?php 
            
            $haber_json_url= "http://lolquery.codingtr.com/webservice/results.json";
            $haber_json_al = file_get_contents($haber_json_url);
            $haber_json_parcala = json_decode($haber_json_al,true);

        
            
                for($i=0;$i <= count($haber_json_parcala["posts"]);$i++){
                    
                    
                    
                            if($haber_json_parcala["posts"][$i]["link"]==$link){
                                
                                $haber_id = $haber_json_parcala["posts"][$i]["haber_id"];
                                $haber_yazan = $haber_json_parcala["posts"][$i]["yazan"];
                                $haber_baslik = $haber_json_parcala["posts"][$i]["baslik"];
                                $haber_yazi = $haber_json_parcala["posts"][$i]["yazi"];
                                $haber_ozet = $haber_json_parcala["posts"][$i]["ozet"];
                                $haber_kategori = $haber_json_parcala["posts"][$i]["kategori"];
                                $haber_foto = $haber_json_parcala["posts"][$i]["foto"];
                                
                                break;
                                
                            }
                    
                    
                    
                }
            
                $admin_sorgu ="SELECT * FROM admins where admin_mail = '$haber_yazan'";
                $admin_sorgu_yap = mysqli_query($baglan,$admin_sorgu);
                
                    while($satir_say = mysqli_fetch_array($admin_sorgu_yap)){
                        
                            $admin_isim = $satir_say["isim"].' '.$satir_say["soyisim"];
                            $admin_foto = $satir_say["admin_url"];
                            $admin_link = $satir_say["linkedin"];
                    }
                    
            
            
            ?>
            
            
            
    <img width="740px" src="img/<?php echo $haber_foto;?>" /><br>
    <a href=""><span id="kategori" class="badge badge-pill badge-primary"><?php echo $haber_kategori;?></span></a>
    
    <br>
        <br>
            <br>
            <h1 style="font-size:30px;color:#007bff;"><?php echo $haber_baslik?></h1>
    
    <p>Yazan : <?php echo $admin_isim;?></p>
   <p><?php echo $haber_yazi?></p>
   
  
    
    
    
    
</div>

 <div class="sag-bilgi">
       
       <div class="kisi-info">
           
           <div class="circular--landscape">
              <img src="img/<?php echo $admin_foto;?>" />
           </div>
                <br>
                <h5 class="editor-isim"><?php echo $admin_isim;?></h5>
           <br>
              <br>
                <br>
              <a class="linkedin" target="_blank" href="<?php echo $admin_link;?>"><i class="fab fa-linkedin fa-2x"></i></a>
              
              <br>
              <div class="gricizgi"></div>
             
              <span>Yönetici</span>
              
       </div>
       
       
       
   </div>

</div>


</body>




</html>


<?php 

}else {
    header("Location: login.php");
}


?>