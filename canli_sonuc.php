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

 function DegerDondur($id){

switch($id){

case 517: return "Sylas"; break;
case 518: return "Neeko"; break;    
case 246: return "Qiyana";break;
case 350: return "Yuumi"; break;
case 497: return "Rakan"; break;
case 498: return "Xayah"; break;	
case 142: return "Zoe"; break;
case 555: return "Pyke"; break;
case 145: return "Kaisa";	break;
case 164: return "Camille"; break;
case 266: return "Aatrox"; break;
case 412: return "Thresh"; break;
case 23: return "Tryndamere"; break;
case 79: return "Gragas";	break;
case 69: return "Cassiopeia"; break;
case 136: return "AurelionSol"; break;
case 13: return "Ryze"; break;
case 78: return "Poppy"; break;
case 14: return "Sion"; break;
case 1: return "Annie";	break;
case 202: return "Jhin"; break;
case 43: return "Karma"; break;
case 111: return "Nautilus"; break;
case 240: return "Kled"; break;
case 99: return "Lux"; break;
case 103: return "Ahri";	break;
case 2: return "Olaf"; break;
case 112: return "Viktor";	break;
case 34: return "Anivia";	break;
case 27: return "Singed"; break;
case 86: return "Garen"; break;
case 127: return "Lissandra"; break;
case 57: return "Maokai"; break;
case 25: return "Morgana";	break;
case 28: return "Evelynn"; break;
case 105: return "Fizz"; break;
case 74: return "Heimerdinger";break;
case 238: return "Zed"; break;
case 68: return "Rumble"; break;
case 82: return "Mordekaiser"; break;
case 37: return "Sona";	break;
case 96: return "KogMaw";	break;
case 55: return "Katarina"; break;
case 117: return "Lulu"; break;
case 22: return "Ashe"; break;
case 30: return "Karthus";	break;
case 12: return "Alistar"; break;
case 122: return "Darius"; break;
case 67: return "Vayne"; break;
case 110: return "Varus"; break;
case 77: return "Udyr"; break;
case 89: return "Leona"; break;
case 126: return "Jayce"; break;
case 134: return "Syndra"; break;
case 80: return "Pantheon";	break;
case 92: return "Riven"; break;
case 121: return "Khazix"; break;
case 42: return "Corki"; break;
case 268: return "Azir"; break;
case 51: return "Caitlyn";	break;
case 76: return "Nidalee"; break;
case 85: return "Kennen"; break;
case 3: return "Galio"; break;
case 45: return "Veigar"; break;
case 432: return "Bard"; break;
case 150: return "Gnar"; break;
case 90: return "Malzahar"; break;
case 104: return "Graves"; break;
case 254: return "Vi"; break;
case 10: return "Kayle"; break;
case 39: return "Irelia"; break;
case 64: return "LeeSin"; break;
case 420: return "Illaoi"; break;
case 60: return "Elise"; break;
case 106: return "Volibear"; break;
case 20: return "Nunu"; break;
case 4: return "TwistedFate"; break;
case 24: return "Jax"; break;
case 102: return "Shyvana"; break;
case 429: return "Kalista"; break;
case 141: return "Kayn";	break;
case 36: return "DrMundo";	break;
case 427: return "Ivern"; break;
case 131: return "Diana"; break;
case 223: return "Tahm Kench"; break;
case 63: return "Brand"; break;
case 113: return "Sejuani"; break;
case 8: return "Vladimir";	break;
case 154: return "Zac"; break;
case 421: return "RekSai"; break;
case 133: return "Quinn"; break;
case 84: return "Akali"; break;
case 163: return "Taliyah"; break;
case 18: return "Tristana"; break;
case 120: return "Hecarim"; break;
case 15: return "Sivir"; break;
case 236: return "Lucian"; break;
case 107: return "Rengar"; break;
case 19: return "Warwick"; break;
case 72: return "Skarner"; break;
case 54: return "Malphite"; break;
case 157: return "Yasuo"; break;
case 101: return "Xerath"; break;
case 17: return "Teemo"; break;
case 75: return "Nasus"; break;
case 58: return "Renekton"; break;
case 119: return "Draven"; break;
case 35: return "Shaco"; break;
case 50: return "Swain"; break;
case 91: return "Talon"; break;
case 40: return "Janna"; break;
case 115: return "Ziggs"; break;
case 245: return "Ekko"; break;
case 61: return "Orianna"; break;
case 114: return "Fiora"; break;
case 9: return "Fiddlesticks";break;
case 31: return "Chogath"; break;
case 33: return "Rammus"; break;
case 7: return "Leblanc"; break;
case 16: return "Soraka"; break;
case 26: return "Zilean"; break;
case 56: return "Nocturne"; break;
case 222: return "Jinx"; break;
case 83: return "Yorick"; break;
case 6: return "Urgot"; break;
case 203: return "Kindred"; break;
case 21: return "MissFortune"; break;
case 62: return "MonkeyKing"; break;
case 53: return "Blitzcrank"; break;
case 98: return "Shen"; break;
case 201: return "Braum"; break;
case 516: return "Ornn"; break;
case 5: return "XinZhao"; break;
case 29: return "Twitch"; break;
case 11: return "MasterYi"; break;
case 44: return "Taric"; break;
case 32: return "Amumu"; break;
case 41: return "Gangplank"; break;
case 48: return "Trundle"; break;
case 38: return "Kassadin"; break;
case 161: return "Velkoz"; break;
case 143: return "Zyra"; break;
case 267: return "Nami"; break;
case 59: return "JarvanIV"; break;
case 81: return "Ezreal"; break;
}
}

 function BuyuDondur($buyu){
                    	switch($buyu){
                    	case 14:	  return "SummonerDot"; 			    break;
                    	case 07:	  return "SummonerHeal"; 				  break;
                    	case 04:	  return "SummonerFlash"; 				break;
                    	case 21:	  return "SummonerBarrier"; 			break;
                    	case 64:	  return "SummonerBoost"; 				break;
                    	case 12:	  return "SummonerTeleport"; 			break;
                    	case 03: 	  return "SummonerExhaust";				break;
                    	case 06:	  return "SummonerHaste"; 				break;
                    	case 13:	  return "SummonerMana"; 				  break;
                    	case 11:	  return "SummonerSmite"; 				break;
                    	case 32:	  return "SummonerSnowball"; 			break;
                    	case 31:	  return "SummonerThrow";			   	break;
                    	case 30:	  return "SummonerPoroRecall";		break;
                    	
                    	
                    	}
                    }                     
                        
 function Aciklama($buyu2){
                    switch($buyu2)
                    {
                    	case 14:	  return "Hedef rakip birimini tutuşturarak, 5 saniye içinde 70-410 (şampiyon seviyesine bağlı olarak) gerçek hasar verir, hedefin görülmesini sağlar ve bu süre boyunca hedefin aldığı iyileştirme etkilerini azaltır."; 			    break;
                    	case 07:	  return "Şampiyonunun ve hedef alınan dost bir şampiyonun Can değerini (şampiyon seviyesine bağlı olarak) 90-345 arası yeniler ve 1 saniyeliğine %30 Hareket Hızı verir. Yakın zamanda sihirdar büyüsü Şifa'dan etkilenen birimlerde bu iyileştirme etkisi yarı yarıya azalır. "; 				break;
                    	case 04:      return "Şampiyonunun, imlecinin doğrultusunda, kısa bir mesafe ışınlanmasını sağlar.";  break;
                    	case 21:	  return "Şampiyonunu 2 saniyeliğine (şampiyonun seviyesine bağlı olarak) 115-455 hasardan korur."; 			break;
                    	case 64:	  return "Şampiyonunu etkileyen (sindirme hariç) bütün engelleme ile sihirdar büyüsü dezavantajlarını ortadan kaldırır ve alınan engelleme etkilerinin süresini 3 saniyeliğine %65 azaltır."; 			break;
                    	case 12:	  return "4,5 saniye odaklandıktan sonra şampiyonunu hedef alınan dost yapı, minyon ya da toteme ışınlar."; 			break;
                    	case 03: 	  return "Hedef şampiyonu bitkin düşürerek, 2,5 saniyeliğine Hareket Hızı ile Saldırı Hızını %30, Zırh ve Büyü Direnci değerlerini 10 azaltır ve bu süre boyunca hedefin verdiği hasarı %40 azaltır.";				break;
                    	case 06:	  return "Şampiyonun 10 saniyeliğine birimlerin içinden geçebilir ve seviyesine bağlı olarak %28-45 Hareket Hızı artışı kazanır."; 				break;
                    	case 13:	  return "Şampiyonunun azami Mana değerinin %50'sini yeniler. Ayrıca, takım arkadaşlarının azami Mana değerinin %25'ini de doldurur."; 				break;
                    	case 11:	  return "Hedeflenen destansı canavara ya da rakip minyona, şampiyonun seviyesine bağlı olarak 390-1000 gerçek hasar verir. Canavarlara karşı kullanıldığında kullanan şampiyonun azami can miktarına bağlı olarak can yeniler."; 				break;
                    	case 32:	  return "Rakiplerine düz bir hat üzerinde kartopu fırlatır. Kartopu isabet ettiği rakibi işaretler. Hemen ardından işaretli hedefin yanına hızla gidebilirsin."; 			break;
                    	case 31:	  return "Rakiplerine bir Poro atarsın. İsabet ederse, hemen ardından isabet ettiği hedefin yanına hızla gidebilirsin.";				break;
                    	case 30:	  return "Hızlıca Poro Kralı'nın yanına gidersin.";			break;
                    }
                    	} 


$kadi = $_POST["kadi"];
$sv = $_POST["server"];

 $bilgi_url = "https://".$sv.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$kadi."?api_key=".$api_key;
    
      $oyuncu_bilgi = file_get_contents($bilgi_url);
      $bilgi_bul = json_decode($oyuncu_bilgi, true);
      
      
      $id = $bilgi_bul["id"];
      
      $mac_id = "https://".$sv.".api.riotgames.com/lol/spectator/v4/active-games/by-summoner/".$id."?api_key=".$api_key;
        
            $mac_bul = file_get_contents($mac_id);
            $mac_parcala = json_decode($mac_bul,true);
        
    
        if($mac_parcala["gameMode"]== "ARAM"){
            $mac_video = "http://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/gamemodeassets/aram/video/game-select-icon-active.webm";
            $mac_tur = "Aram";
            
        }else if($mac_parcala["gameMode"]== "CLASSIC"){
            $mac_video = "http://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/gamemodeassets/classic_sru/video/game-select-icon-active.webm";
            $mac_tur = "Sihirdar Vadisi 5v5";
        }
echo $mac_id;

$kullanici_id = $_SESSION["user_id"];

     $online_sorgu = "UPDATE users SET user_durum = 1 WHERE user_id = '$kullanici_id' ";
     
     mysqli_query($baglan, $online_sorgu);
      

function RunDondur($run){
    
    switch($run){
        
        case 8100: return "Hâkimiyet";
        case 8300: return "İlham";
        case 8000: return "İsabet";
        case 8400: return "Azim";
        case 8200: return "Büyücülük";
        
    }
    
}

   


    








if($_SESSION["online"]){
    
 ?>




<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<link rel="stylesheet" href="css/canli_mac.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="img/favicon.ico"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

<div class="canli-icerik">
    
<?php 

    if( !($mac_id["status"]["status_code"]== 200) ){
        
        echo '<br>
        <br>
        <div style="width:1200px;height:50px;margin:0 auto;text-align:center;text-decoration:uppercase;font-weight:bold;" class="alert alert-danger" role="alert">
  KİŞİ ŞU ANDA OYUNDA DEĞİL!
</div>';
        
        
    }else{
        


?>
    
    
    
  <br>
  <br>
  <br>
  
  <div class="mac-bilgi">
      
    <video autoplay="autoplay" preload="auto" loop>
        <source loop src="<?php echo $mac_video;?>" type="video/webm">
    </video>
      <span style="vertical-align: center;position: relative;top: -40px;color: #121212;font-size: 34px;left: 10px;"><?php echo $mac_tur;?></span>
      
      <div class="mavi-takim-ban">
          <img src="<?php echo DegerDondur($mac_parcala["participants"][0]["championId"]);?>" height="50px">
      </div>
      
      
  </div>
  
 <br>
 <br>
 <br>
 <br>
 
   <hr color="#a37c30">
  
<div class="sol-canli">
                            <div class="card bg-dark text-white" style="background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][0]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                            <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                          <div class="card-img-overlay" style="padding:0px;">
                           
                           <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][0]["summonerName"];?></span>
                           <br>
                          
                          <div style="margin-left:10px;margin-top:40px;"><font color="deepskyblue"><?php echo DegerDondur($mac_parcala["participants"][0]["championId"]);?></font><span> Oynuyor</span></div> 
                            
                            <img style="margin-top: -29px;position: absolute;margin-left: 313px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][0]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 348px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][0]["perks"]["perkSubStyle"])?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][0]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][0]["spell2Id"]);?>.png">
                          </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                         <div class="card bg-dark text-white" style="background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][1]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                          <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                          <div class="card-img-overlay" style="padding:0px;">
                           
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][1]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="deepskyblue"><?php echo DegerDondur($mac_parcala["participants"][1]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][1]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][1]["perks"]["perkSubStyle"])?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][1]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][1]["spell2Id"]);?>.png">
                          
                        
                          </div>
                        </div>
                        
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                          <div class="card bg-dark text-white" style="background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][2]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                          <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                          <div class="card-img-overlay" style="padding:0px;">
                           
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][2]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="deepskyblue"><?php echo DegerDondur($mac_parcala["participants"][2]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][2]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][2]["perks"]["perkSubStyle"])?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][2]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][2]["spell2Id"]);?>.png">
                          
                        
                          </div>
                        </div>
                        
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                          <div class="card bg-dark text-white" style="background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][3]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                          <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                          <div class="card-img-overlay" style="padding:0px;">
                           
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][3]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="deepskyblue"><?php echo DegerDondur($mac_parcala["participants"][3]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][3]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][3]["perks"]["perkSubStyle"])?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][3]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][3]["spell2Id"]);?>.png">
                          
                        
                          </div>
                        </div>
                        
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                          <div class="card bg-dark text-white" style="background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][4]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                          <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                          <div class="card-img-overlay" style="padding:0px;">
                           
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][4]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="deepskyblue"><?php echo DegerDondur($mac_parcala["participants"][4]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][4]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][4]["perks"]["perkSubStyle"])?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][4]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][4]["spell2Id"]);?>.png">
                          
                        
                          </div>
                        </div>
                        
                        
    
    
</div>

<img src="img/vs.png" style="position: relative;top: 257px;left: 53px;">

  
<div class="sag-canli" style="float:right;">
    
                            <div class="card bg-dark text-white selam" style="transform: scaleX(-1);background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][5]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                            <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                          <div class="card-img-overlay" style="padding:0px;transform: scaleX(-1);">
                            
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][5]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="red"><?php echo DegerDondur($mac_parcala["participants"][5]["championId"]);?></font><span> Oynuyor</span></div>
                           <img style="margin-top: -29px;position: absolute;margin-left: 313px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][5]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 348px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][5]["perks"]["perkSubStyle"]);?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][5]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][5]["spell2Id"]);?>.png">
                          
                          </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                             <div class="card bg-dark text-white" style="transform: scaleX(-1);background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][6]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                                <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                                <div class="card-img-overlay" style="padding:0px;transform: scaleX(-1);">
                            
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][6]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="red"><?php echo DegerDondur($mac_parcala["participants"][6]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][6]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][6]["perks"]["perkSubStyle"]);?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][6]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][6]["spell2Id"]);?>.png">
                          
                          </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                             <div class="card bg-dark text-white" style="transform: scaleX(-1);background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][7]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                                <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                                <div class="card-img-overlay" style="padding:0px;transform: scaleX(-1);">
                            
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][7]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="red"><?php echo DegerDondur($mac_parcala["participants"][7]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][7]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][7]["perks"]["perkSubStyle"]);?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][7]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][7]["spell2Id"]);?>.png">
                          
                          </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                               <div class="card bg-dark text-white" style="transform: scaleX(-1);background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][8]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                                <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                                <div class="card-img-overlay" style="padding:0px;transform: scaleX(-1);">
                            
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][8]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="red"><?php echo DegerDondur($mac_parcala["participants"][8]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][8]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][8]["perks"]["perkSubStyle"]);?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][8]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][8]["spell2Id"]);?>.png">
                          
                          </div>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                            <div class="card bg-dark text-white" style="transform: scaleX(-1);background-image: url(https://cdn.communitydragon.org/9.13.1/champion/<?php echo $mac_parcala["participants"][9]["championId"];?>/splash-art/centered);width: 500px;height: 100px;background-size: 100%;background-position-y: -50px;">
                                <div style="height: 100px;width: 500px;background: rgba(0,0,0,.5);"></div>
                                <div class="card-img-overlay" style="padding:0px;transform: scaleX(-1);">
                            
                            <span style="padding-left:5px;margin-left: 5px;font-size: 16pt;top: -9px;border-bottom: 1px solid #fff;padding-bottom: -40px;"><?php echo $mac_parcala["participants"][9]["summonerName"];?></span>
                        <br>
                        <div style="margin-left:10px;margin-top:40px;"><font color="red"><?php echo DegerDondur($mac_parcala["participants"][9]["championId"]);?></font><span> Oynuyor</span></div>
                        
                         <img style="margin-top: -29px;position: absolute;margin-left: 303px;" height="32px" src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][9]["perks"]["perkStyle"]);?>.png">
                            <img style="margin-top: -29px;position: absolute;margin-left: 338px;" height="32px"src="http://lolquery.codingtr.com/img/<?php echo RunDondur($mac_parcala["participants"][9]["perks"]["perkSubStyle"]);?>.png">
                            
                            
                            <img style="margin-top:35px;float:right;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][9]["spell1Id"]);?>.png">
                            <img style="margin-top:35px;float:right;margin-right:10px;border-radius:50%;border:1px solid #121212;" height="30px" src="http://ddragon.leagueoflegends.com/cdn/9.13.1/img/spell/<?php echo BuyuDondur($mac_parcala["participants"][9]["spell2Id"]);?>.png">
                          
                          </div>
                        </div>
                        
                        
                        
                        



</div>  
  
  
  
    
    
   
    
    
</div>

<?php 

    }

?>


</body>




</html>


<?php 

}else {
    header("Location: login.php");
}


?>