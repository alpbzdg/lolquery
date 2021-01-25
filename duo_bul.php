

<?php

$sunucu = "185.50.71.32";
$sifre = "159705Fu";
$veritabani = "codingtr_lolquery";
$kullanici = "codingtr_furkan";

$baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);

  if($baglan){
   
        $key_query = "SELECT * FROM apikey where id='1' ";
        $key_query_rn = mysqli_query($baglan, $key_query);
            $query_say = mysqli_num_rows($key_query_rn);
        if($query_say > 0){
            $api_key_query = mysqli_fetch_array($key_query_rn);
            $api_key = $api_key_query["api_key"];
        }else{
            echo "byle bir api yok.";
        }
        
   
   
    
  }else {
    echo "Baglant覺 bozuk.";
    
  }

session_start();


$kullanici_id = $_SESSION["user_id"];

     $online_sorgu = "UPDATE users SET user_durum = 1 WHERE user_id = '$kullanici_id' ";
     
     mysqli_query($baglan, $online_sorgu);
      
if($_SESSION["online"]){
    
 ?>

<?php 



    $mail = $_SESSION["user_email"];
    
    $oyuncu_sorgusu = "SELECT * FROM game_users where user_email = '$mail'";
    
        $sorgu_gerceklestir = mysqli_query($baglan,$oyuncu_sorgusu);
        $sorgu_say = mysqli_num_rows($sorgu_gerceklestir);
        
        
                if($sorgu_say > 0){
                    
                    $sorgu_parcala = mysqli_fetch_array($sorgu_gerceklestir);
                    $oyuncu_nick = $sorgu_parcala["gamer_username"];
                    $onay = $sorgu_parcala["onay"];
                    $sv = $sorgu_parcala["gamer_server"];
                }else{
                    
                }
        
?>


<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<link rel="stylesheet" href="css/duo.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="img/favicon.ico"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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


//Yeni Kayıt Olduysanız Lütfen Ayarlar Bölümünden Oynamakta Olduğunuz Hesabınızın Kullanıcı Adı (Oyun İçi)'nı yazınız.
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
        
        <img height="30px" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Yeni Kayıt Olduysanız Lütfen <br> Ayarlar Bölümünden Oynamakta <br> Olduğunuz Hesabınızın<br> Kullanıcı Adı (Oyun İçi)'nı yazınız." style="position:absolute;margin-left:-50px;margin-top:10px;cursor:help;" width="30px"onmouseover="hover(this);" onmouseout="unhover(this);" src="https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-navigation/global/default/button-ticker-blue.png">
        
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
    <br>
    
    <?php 
    
    
    $bilgi_url = "https://".$sv.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$oyuncu_nick."?api_key=".$api_key;
    
      $oyuncu_bilgi = file_get_contents($bilgi_url);
      $bilgi_bul = json_decode($oyuncu_bilgi, true);
      
     $karakter_level =$bilgi_bul['summonerLevel'];  
      
      $karakter_id = $bilgi_bul["id"];
      $account_id = $bilgi_bul["accountId"];
      
      $sampiyon_info = "https://".$sv.".api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/".$karakter_id."?api_key=".$api_key;
      $sampiyon_bilgi = file_get_contents($sampiyon_info);
      $sampiyon_bul = json_decode($sampiyon_bilgi, true);
      
        $sampiyon = $sampiyon_bul[0]["championId"];
      
      
      
      
      $oyuncu_resmi = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/profileicon/".$bilgi_bul["profileIconId"].".png";
        $oyuncu_profil_foto = $bilgi_bul["profileIconId"];
    
    
    
    $lig_url = "https://".$sv.".api.riotgames.com/lol/league/v4/entries/by-summoner/".$karakter_id."?api_key=".$api_key;

    $lig_bilgi=file_get_contents($lig_url);
    $lig_bilgi_bul = json_decode($lig_bilgi, true);
    
    for($i = 0;$i<count($lig_bilgi_bul);$i++){
        if($lig_bilgi_bul[$i]["queueType"] == "RANKED_TFT"){
            $tft_ligi = $lig_bilgi_bul[$i]["tier"];
            $tft_lig_sayi = $lig_bilgi_bul[$i]["rank"];
            
        }else if($lig_bilgi_bul[$i]["queueType"] == "RANKED_FLEX_SR"){
            $esnek_ligi = $lig_bilgi_bul[$i]["tier"];
            $esnek_lig_sayi = $lig_bilgi_bul[$i]["rank"];
        }else if($lig_bilgi_bul[$i]["queueType"] == "RANKED_SOLO_5x5"){
            $ranked_ligi = $lig_bilgi_bul[$i]["tier"];
            $ranked_lig_sayi = $lig_bilgi_bul[$i]["rank"];
        }else{
            
        }
        
    }
    
    if($tft_ligi == ""){
        $tft_ligi = "IRON";
    }
    
    if($esnek_ligi == ""){
        $esnek_ligi = "IRON";
    }
    
    if($ranked_ligi == ""){
        $ranked_ligi = "IRON";
    }
    
    
    
    
    $bilgi = 'Bu kart, sizin oyuna girip bakmamanız için geliştirilmiştir, mevcut liginizi buradan görerek duo bulma sistemini kullanabilirsiniz!';
    
    
    
    ?>
    
    
    <div class="card bg-dark text-white" style="margin: 0 auto;width: 875px;height: 197px;overflow: hidden;">
  <img src="https://cdn.communitydragon.org/9.14.1/champion/<?php echo $sampiyon;?>/splash-art/centered" class="card-img" alt="" style="position: absolute;margin-top: -91px;">
  <div class="card-img-overlay">
   <img style="position:absolute;height:50px;border-radius:50%;border:1px solid yellow;" src="<?php echo $oyuncu_resmi;?>"> <h5 style="position: relative;left: 64px;top: 15px;" class="card-title"><?php echo $oyuncu_nick;?></h5>
    <p style="position: relative;top: 21px;" class="card-text">Seviye : <?php echo $karakter_level;?></p>
    <p style="position: relative;bottom: 0px;top: 70px;" data-toggle="tooltip" data-placement="left" title="<?php echo $bilgi;?>" class="card-text">Bu nedir?</p>
    
    <div class="tft">
       <center>Taktik Savaşları</center>
       <br>
       <img data-toggle="tooltip" data-html="true" data-placement="bottom" title="<?php echo $tft_ligi." ".$tft_lig_sayi;?>" src="img/Emblem_<?php echo $tft_ligi;?>.png">
        
    </div>
    
    <div class="esnek5v5">
        <center>Esnek</center>
        <br>
       <img data-toggle="tooltip" data-html="true" data-placement="bottom" title="<?php echo $esnek_ligi." ".$esnek_lig_sayi;?>" src="img/Emblem_<?php echo $esnek_ligi;?>.png">
        
    </div>
    
    <div class="ranked">
        <center>Dereceli</center>
        <br>
       <img data-toggle="tooltip" data-html="true" data-placement="bottom" title="<?php echo $ranked_ligi." ".$ranked_lig_sayi;?>" src="img/Emblem_<?php echo $ranked_ligi;?>.png">
       
    </div>
    
    
    
  </div>
</div>
    
    
    <br>
        <br>
    <br>


    
    
    <div class="alert alert-success" style="text-align:center;" role="alert">
  <b>LÜTFEN SAYFADAKİ POP-UP'A İZİN VERİNİZ. AKSİ TAKTİRDE YAZDIĞINIZ HİÇ BİR MESAJ GÖNDERİLMEZ.</b>
  </div>
    
    
    
<div class="ortak-chat">
    
    <div class="ortak-chat-header">
        <font color="red">Oyuncu Bul (Duo veya +1)</font>
        
        <button style="margin-left: 616px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
          Nasıl Yav?
        </button>
    </div>
    
    <div class="ortak-chat-icerik">
       
        <script>
            
        var timer= 10;
        var test="";
        
            function inTime(){
                setTimeout(inTime,1000);
                
                if(timer == 9){
                    $.post("mesaj_listele.php",{testing:test} ,function(data){
                        $(".ortak-chat-icerik").html(data);
                    })
                    
                    timer = 11;
                    clearTimeout(inTime);
                    
                }
                
                timer--;
                
            }
            
            inTime();
        
            
            
        </script>
       
       
        
    </div>
    
    <br>
    
    <form style="margin-top:350px;" method="POST">
        
        <div class="input-group mb-3 form-group" style="width: 860px;margin: 0 auto;">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Oyun Modu Seç</label>
  </div>
  <select class="custom-select" name="oyunmodu" id="inputGroupSelect01">
    <option value="Sihirdar Vadisi">Sihirdar Vadisi</option>
    <option value="Aram">Aram</option>
    <option value="TFT">TFT</option>
    <option value="Esnek">Esnek</option>
  </select>
</div>
        
        <div class="input-group mb-3 form-group" style="width: 860px;margin: 0 auto;">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Kaç Kişi Arıyorsun?</label>
  </div>
  <select name="kisisayisi" class="custom-select" id="inputGroupSelect01">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
</div>

    <div class="input-group mb-3 form-group" style="width: 860px;margin: 0 auto;">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Discord veya TeamSpeak adresi</label>
  </div>
  <input maxlength="30" type="text" name="link">
</div>
    
     <div class="input-group mb-3 form-group" style="width: 860px;margin: 0 auto;">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Kendini Anlat! [60 Karakter]</label>
  </div>
  <input maxlength="60" type="text" name="yazi">
</div>
    
 <button type="submit" style="margin-left: 18px;padding-left: 38px;padding-right: 38px;" class="btn btn-dark">Duo Bul!</button>
        
        
    </form>
    

    
    
    
    
    
    
    
    
    
    
    
    
    <?php 
    
        if($_POST){
            //http://lolquery.codingtr.com/webservice/mesajlar.json
            $yazi = $_POST["yazi"];
            $oyun_modu = $_POST["oyunmodu"];
            $kisi_sayisi = $_POST["kisisayisi"];
            $link = $_POST["link"];
            
            $sorgu = "INSERT INTO mesajlar (gonderen,oyuncu_nick,oyuncu_resmi,icerik,oyun_modu,aranan_kisi,link) VALUES ('$mail','$oyuncu_nick','$oyuncu_profil_foto','$yazi','$oyun_modu','$kisi_sayisi','$link')";
            
            $sorgu_yap =mysqli_query($baglan, $sorgu);
                
                if($sorgu_yap){
                    echo '<script type="text/javascript">window.open("http://lolquery.codingtr.com/webservice/otoupdate.html");</script>';
                }else{
                    echo "Sohbet ile bağlantı kurulamadı.";
                }
            
            
            
        }
        
        
        
    
    
    ?>
    
    
    
    
    
    
</div>
<br><br><br>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:700px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sohbet Kuralları</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>LQS - DUO BULMA SİSTEMİNE HOŞ GELDİNİZ..</h5>
        
        LQS nedir?  <br>
        
        LQS , Başkent Üniversitesinden mezun olmuş iki Bilgisayar Programcısı tarafından geliştirilmiş bir sorgu , duo ve turnuva sistemidir.<br>
        
        ---------------------------------------------------------------- <br>
        
        Kullanıcının verimli bir tecrübe elde etmesi için sizlere yapmanız gereken şeyleri sıraladık! <br>
        
        <ul class="list-group">
            <li class="list-group-item list-group-item-action list-group-item-light">Oynadığınız maçların ss'lerini alıp sosyal medya sekmesine atın,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Önemli pozisyonlarınızı oyun tekrarından kaydedip sosyal medyamızda bizlerle paylaşın,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Kendinize arkadaş ortamı bulun,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Oynamak istediğiniz oyun modunu seçin ve insanları davet edin,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Turnuvalarımıza katılın, ödüller kazanın ve isminizi sitemizin turnuva kazananlar bölümüne yazdırın,</li>
           
            
        </ul>
        ---------------------------------------------------------------- <br>
        Herkese iyi oyunlar!
        
        
      </div>
      <div class="modal-footer">
        Mesaj gönderdiğiniz anda tüm sorumluluk sizdedir.
      </div>
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

