<?php

session_start();
include 'Ayarlar/db_baglan.php';
include '/fonksiyon.php';

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
                        
  

 
 
 
 
                        
if($_SESSION["online"]){
    $kadi = mb_strtolower(str_replace(" ","",$_POST["kadi"]));
    $sv = $_POST["server"];
    
    include 'Ayarlar/db_baglan.php';
    $bilgi_url = "https://".$sv.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$kadi."?api_key=".$api_key;
    
      $oyuncu_bilgi = file_get_contents($bilgi_url);
      $bilgi_bul = json_decode($oyuncu_bilgi, true);
      
    $karakter_level =$bilgi_bul['summonerLevel'];  
      
      $account_id = $bilgi_bul["accountId"];
      
      
      $oyuncu_resmi = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/profileicon/".$bilgi_bul["profileIconId"].".png";
    
    $lig_url = "https://".$sv.".api.riotgames.com/lol/league/v4/entries/by-summoner/".$bilgi_bul['id']."?api_key=".$api_key;

    $lig_bilgi=file_get_contents($lig_url);
    $lig_bilgi_bul = json_decode($lig_bilgi, true);

        
    for($a = 0; $a <= count($lig_bilgi_bul);$a++){
        
        if($lig_bilgi_bul[$a]["queueType"] == "RANKED_SOLO_5x5"){
            $kume = $lig_bilgi_bul[$a]['tier'];
            $kume_sayi = $lig_bilgi_bul[$a]['rank'];
    
        }
        
        
    }
   
     

    $mac_url = "https://tr1.api.riotgames.com/lol/match/v4/matchlists/by-account/".$account_id."?api_key=".$api_key;
    
    if($kume == 'IRON'){
        $ligi_varmi = true;
        $kume = 'DEMİR'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/01_iron/images/iron_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/01_iron/images/iron_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_iron-";
    }else if($kume == 'BRONZE'){
        $ligi_varmi = true;
        $kume = 'BRONZ'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/02_bronze/images/bronze_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/02_bronze/images/bronze_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_bronze-";
    }else if($kume == 'SILVER'){
        $ligi_varmi = true;
        $kume = 'GÜMÜŞ'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/03_silver/images/silver_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/03_silver/images/silver_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_silver-";
    }else if($kume == 'GOLD'){
        $ligi_varmi = true;
        $kume = 'ALTIN'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/04_gold/images/gold_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/04_gold/images/gold_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_gold-";
    }else if($kume == 'PLATINUM'){
        $ligi_varmi = true;
        $kume = 'PLATİN'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/05_platinum/images/platinum_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/05_platinum/images/platinum_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_platinum-";
    }else if($kume == 'DIAMOND'){
        $ligi_varmi = true;
        $kume = 'ELMAS'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/06_diamond/images/diamond_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/06_diamond/images/diamond_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_diamond-";
    }else if($kume == 'MASTER'){
        $ligi_varmi = true;
        $kume = 'USTALIK'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/07_master/images/master_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/07_master/images/master_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_master-";
    }else if($kume == 'GRANDMASTER'){
        $ligi_varmi = true;
        $kume= 'ÜSTATLIK'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/08_grandmaster/images/grandmaster_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/08_grandmaster/images/grandmster_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_grandmaster-";
    }else if($kume == 'CHALLENGER') {
        $ligi_varmi = true;
        $kume = 'ŞAMPİYONLUK'.' '.$kume_sayi;
        $tac = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/09_challenger/images/challenger_crown_d1.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/09_challenger/images/challenger_base.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/rankposition_challenger-";
    }else{
        $kume = 'LİG YOK';
        $tac ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/01_iron/images/iron_crown_d1_hotg.png";
        $ikon = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/content/src/leagueclient/rankedcrests/01_iron/images/iron_base_hotg.png";
        $lane_kume ="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/assets/ranked/positions/unranked-";
    }
    
    
    for($tsayac = 0; $tsayac<=count($lig_bilgi_bul) ;$tsayac++){
        
        if($lig_bilgi_bul[$tsayac]["queueType"]== 'RANKED_TFT'){
          $tft_kume = $lig_bilgi_bul[$tsayac]["tier"];
          $tft_kume_sayi = $lig_bilgi_bul[$tsayac]["rank"];
          $tft_win = $lig_bilgi_bul[$tsayac]["wins"];
          $tft_lose = $lig_bilgi_bul[$tsayac]["losses"];
            break;
        }else{
            $tft_kume = "LİG YOK";
            $tft_kume_sayi = "";
            $tft_win = "0";
            $tft_lose = "0";
            $tft_kume_tr = 'LİG YOK';
            $tft_foto = "http://lolquery.codingtr.com/img/unranked.png";
        }
    }
    
    
    
    
     if($tft_kume == 'IRON'){
         
       $tft_kume_tr = 'DEMİR'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_IRON.png";
       
    }else if($tft_kume == 'BRONZE'){
       $tft_kume_tr = 'BRONZ'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_BRONZE.png";
       
    }else if($tft_kume == 'SILVER'){
       $tft_kume_tr = 'GÜMÜŞ'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_SILVER.png";
        
    }else if($tft_kume == 'GOLD'){
       $tft_kume_tr = 'ALTIN'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_GOLD.png";
        
    }else if($tft_kume == 'PLATINUM'){
        $tft_kume_tr = 'PLATİN'.' '.$tft_kume_sayi;
        $tft_foto = "http://lolquery.codingtr.com/img/Emblem_PLATINUM.png";
        
    }else if($tft_kume == 'DIAMOND'){
       $tft_kume_tr = 'ELMAS'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_DIAMOND.png";
       
    }else if($tft_kume == 'MASTER'){
       $tft_kume_tr = 'USTALIK'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_MASTER.png";
       
    }else if($tft_kume == 'GRANDMASTER'){
        $tft_kume_tr = 'ÜSTATLIK'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_GRANDMASTER.png";
        
    }else if($tft_kume == 'CHALLENGER') {
       $tft_kume_tr = 'ŞAMPİYONLUK'.' '.$tft_kume_sayi;
       $tft_foto = "http://lolquery.codingtr.com/img/Emblem_CHALLENGER.png";
       
    }else{
        $tft_kume_tr = 'LİG YOK'.' '.$tft_kume_sayi;
        $tft_kume_sayi = "";
        $tft_win = "0";
        $tft_lose = "0";
        $tft_kume_tr = 'LİG YOK';
        $tft_foto = "http://lolquery.codingtr.com/img/unranked.png";
        
    }
    
    
    
    
    
    
    
    
 ?>




<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/profil_bul.css">
<link rel="stylesheet" href="css/sayfa.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
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

/*   
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

<div class="orta-icerik" style="width:1020px;">
   <br />
   <br />
   <br />
   <br />
  <!-- <img class="pp" height="125px" src="<?php echo $oyuncu_resmi;?>"/> <h1 class="pp-isim"><?php echo $bilgi_bul['name'];?></h1>
   <img class="pp-cerceve" src="<?php echo $cerceve_url;?>" />
   <span class="karakter-level"><?php echo $karakter_level;?></span>
   <span class="lig-isim"><?php echo $kume;?></span>
    !-->
    
    
    <div class="sol-karakter-info">
    
    <div class="yazilar">
        <br>
    <span id="oyuncu-isim"><?php echo $bilgi_bul['name'];?></span><br><br>
    <span data-toggle="tooltip" title="Seviye" id="level"><?php echo $karakter_level;?></span>
    
    </div>
    
    <div class="fotolar">
    <img src="<?php echo $ikon;?>" data-toggle="tooltip" title="<?php echo $kume;?>" style="height: 220px;position: absolute;margin-top: -49px;margin-left: -50px;">
    <img src="<?php echo $tac;?>" data-toggle="tooltip" title="<?php echo $kume;?>" style="height:208px;position: absolute;margin-left: -44px;margin-top: -51px;">
    <img id="oyuncu-foto" src="<?php echo $oyuncu_resmi;?>" >
    </div>
    <br>
   
    <div class="tft-ranked">
        <br>
        <br>
        <img data-toggle="tooltip" height="130px" title="<?php echo $tft_kume_tr; ?>" src="<?php echo $tft_foto;?>"/>
        <br>
        <br>
        <span><?php echo "<font color='green'>".$tft_win." ZAFER </font> | <font color='red'> ".$tft_lose." BOZGUN </font>";?></span>
        
        
    </div>
    
    
    
    </div>
    
    <script>
        $('.dropdown-toggle').dropdown();
    </script>
    
    <?php 
    
     $mac_bol = file_get_contents($mac_url);
    $mac_sayisi = json_decode($mac_bol,true);
    
    
    
    
    for($j=0; $j<=9;$j++){
         
        $oyun_id = $mac_sayisi["matches"][$j]["gameId"];
        $lane = $mac_sayisi["matches"][$j]["lane"];

        
        if($lane == "MID"){
            $lane_ismi="mid_lg.png";
            $rol = "MİD";
           
        }else if($lane == "TOP"){
            $lane_ismi= "top_lg.png";
            $rol = "TOP";
            
        }else if($lane == "BOTTOM"){
            $lane_ismi= "bot_lg.png";
            $rol = "BOT";
        }else if($lane == "JUNGLE"){
            $lane_ismi= "jungle_lg.png";
            $rol = "ORMAN";
        }else if($lane == "NONE"){
            $lane_ismi = "";
            $rol = "FARKLI OYUN MODU YADA - DOLDUR";
        }else{
            $lane_kume = "https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-clash/global/default/assets/images/position-selector/positions/icon-position-fill.png";
        }
        
     
        
        
        
        
   
    $macin_urlsi="https://tr1.api.riotgames.com/lol/match/v4/matches/".$oyun_id."?api_key=".$api_key;
    
        $gecmis_url = file_get_contents($macin_urlsi);
        $gecmis_parcala = json_decode($gecmis_url,true);
        
        
        
        
            for($i = 0; $i<count($gecmis_parcala["participantIdentities"]);$i++){
                 
                $oyun_nicki = $gecmis_parcala["participantIdentities"][$i]["player"]["summonerName"];
                
                $oyuncu_nick = mb_strtolower(str_replace(" ","",$oyun_nicki));
                
                 
                if($oyuncu_nick == $kadi){
                     
                  
                    
                        $sampiyon_id = $gecmis_parcala["participants"][$i]["championId"];
                        $takim_id    = $gecmis_parcala["participants"][$i]["teamId"];
                        $spel1       = $gecmis_parcala["participants"][$i]["spell1Id"];
                        $spel2       = $gecmis_parcala["participants"][$i]["spell2Id"];
                        $durum       = $gecmis_parcala["participants"][$i]["stats"]["win"];
                        $item1       = $gecmis_parcala["participants"][$i]["stats"]["item0"];
                        $item2       = $gecmis_parcala["participants"][$i]["stats"]["item1"];
                        $item3       = $gecmis_parcala["participants"][$i]["stats"]["item2"];
                        $item4       = $gecmis_parcala["participants"][$i]["stats"]["item3"];
                        $item5       = $gecmis_parcala["participants"][$i]["stats"]["item4"];
                        $item6       = $gecmis_parcala["participants"][$i]["stats"]["item5"];
                        $item7       = $gecmis_parcala["participants"][$i]["stats"]["item6"];
                        $kill        = $gecmis_parcala["participants"][$i]["stats"]["kills"];
                        $death       = $gecmis_parcala["participants"][$i]["stats"]["deaths"];
                        $assists     = $gecmis_parcala["participants"][$i]["stats"]["assists"];
                        $minyon      = $gecmis_parcala["participants"][$i]["stats"]["totalMinionsKilled"];
                        $gold        = $gecmis_parcala["participants"][$i]["stats"]["goldEarned"];
                        
                        for($k = 0; $k <= 1;$k++){
                            if($takim_id == $gecmis_parcala["teams"][$k]["teamId"]){
                                
                                $inhibitor = $gecmis_parcala["teams"][$k]["inhibitorKills"];
                                $kule = $gecmis_parcala["teams"][$k]["towerKills"];
                                
                                    $sonuc = $gecmis_parcala["teams"][$k]["win"];
                                
                                if($sonuc== "Win"){
                                    $sonuc = '<span style="position:absolute;color:#66bb6a;">ZAFER</span>';
                                    
                                }else{
                                    $sonuc = '<span style="position:absolute;color:#b71c1c;">BOZGUN</span>';
                                }
                            }
                        }
                        
                                                    
                            if($item1 == 0){
                                $item_id1='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else {
                               
                                $item_id1="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item1.".png";
                            }
                            
                            if($item2 == 0){
                                $item_id2='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else{
                               
                                $item_id2="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item2.".png";
                            }
                            
                            
                            if($item3 == 0){
                                $item_id3='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else{
                                
                                $item_id3 = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item3.".png";
                            }
                            
                            
                            
                            
                            if($item4 == 0){
                                $item_id4='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else{
                                
                                $item_id4="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item4.".png";
                                
                            }
                            
                            
                            
                            if($item5 == 0){
                                $item_id5='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else{
                               
                                $item_id5="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item5.".png";
                            }
                            if($item6 == 0){
                                $item_id6='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else{
                               
                                $item_id6="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item6.".png";
                            }
                            if($item7 == 0){
                                
                                $item_id7='http://ddragon.leagueoflegends.com/cdn/8.11.1/img/spell/SummonerDarkStarChampSelect1.png';
                            }else{
                               
                                $item_id7="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/item/".$item7.".png";
                            }
                            
                        $oyuncu1 = $gecmis_parcala["participantIdentities"][0]["player"]["summonerName"];
                        
                        $oyuncu1_foto = $gecmis_parcala["participants"][0]["championId"];
                        
                        $oyuncu2 = $gecmis_parcala["participantIdentities"][1]["player"]["summonerName"];
                        
                        $oyuncu2_foto = $gecmis_parcala["participants"][1]["championId"];
                        
                        $oyuncu3 = $gecmis_parcala["participantIdentities"][2]["player"]["summonerName"];
                        
                        $oyuncu3_foto = $gecmis_parcala["participants"][2]["championId"];
                        
                        $oyuncu4 = $gecmis_parcala["participantIdentities"][3]["player"]["summonerName"];
                        
                        $oyuncu4_foto = $gecmis_parcala["participants"][3]["championId"];
                        
                        $oyuncu5 = $gecmis_parcala["participantIdentities"][4]["player"]["summonerName"];
                        
                        $oyuncu5_foto = $gecmis_parcala["participants"][4]["championId"];
                  
                        $oyuncu6 = $gecmis_parcala["participantIdentities"][5]["player"]["summonerName"];
                        
                        $oyuncu6_foto = $gecmis_parcala["participants"][5]["championId"];
                        
                        $oyuncu7 = $gecmis_parcala["participantIdentities"][6]["player"]["summonerName"];
                        
                        $oyuncu7_foto = $gecmis_parcala["participants"][6]["championId"];
                        
                        $oyuncu8 = $gecmis_parcala["participantIdentities"][7]["player"]["summonerName"];
                        
                        $oyuncu8_foto = $gecmis_parcala["participants"][7]["championId"];
                        
                        $oyuncu9 = $gecmis_parcala["participantIdentities"][8]["player"]["summonerName"];
                        
                        $oyuncu9_foto = $gecmis_parcala["participants"][8]["championId"];
                        
                        $oyuncu10 = $gecmis_parcala["participantIdentities"][9]["player"]["summonerName"];
                        
                        $oyuncu10_foto = $gecmis_parcala["participants"][9]["championId"];
                        
                        $altin_resmi = "http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png";
                         
                          $item_url = "http://ddragon.leagueoflegends.com/cdn/9.14.1/data/tr_TR/item.json";
                            $item_url_cek = file_get_contents($item_url);
                              $item_url_parcala = json_decode($item_url_cek, true);

                        
                        
                     //SAAT ZAMAN VS EKLENECEK 
                     
                     
                     
        //              if($item == $item_url_parcala["data"][$item]){
        //     $item_isim = $item_url_parcala["data"][$item]["name"];
        //     $item_aciklama = $item_url_parcala["data"][$item]["description"];
        //     $item_fiyat = $item_url_parcala["data"][$item]["gold"]["base"];
            
        // }
                     
                     
                   echo '<div class="sag-info">
      
        <div class="char-photo">
            
            <img data-toggle="tooltip" title="'.DegerDondur($sampiyon_id).'" src="https://cdn.communitydragon.org/9.13.1/champion/'.$sampiyon_id.'/tile"> 
        
        </div>
        
        '.$sonuc.'
        
        <div class="itemler">
            
            
            
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item1]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item1]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item1]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id1.'">
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item2]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item2]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item2]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id2.'">
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item3]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item3]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item3]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id3.'">
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item4]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item4]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item4]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id4.'">
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item5]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item5]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item5]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id5.'">
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item6]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item6]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item6]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id6.'">
            <img data-toggle="tooltip" data-html="true" title="<b style='. "'color:orange;'" .' >'.$item_url_parcala["data"][$item7]["name"].' </b>  <hr style='."'margin-top:0px'".' color='."'#121212'".' > <b> Ne İşe Yarar  ? </b> <br> '.$item_url_parcala["data"][$item7]["description"].' <hr style='."'margin-top:0px'".' color='."'#121212'".' >'.$item_url_parcala["data"][$item7]["gold"]["total"].'<img style='."'margin-top:10px'".' src='. "'{$altin_resmi}'" .'>                     " src="'.$item_id7.'">
            
        </div>
        
        <div class="cizgi-uzun"></div>
        
        <div class="speller">
            
            
            <img data-toggle="tooltip" data-html="true" title="'.Aciklama($spel1).'" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/'.BuyuDondur($spel1).'.png">
            <br />
            <img data-toggle="tooltip" data-html="true" title="'.Aciklama($spel2).'" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/'.BuyuDondur($spel2).'.png">
            
        </div>
        
 
          <button type="button" style="position: relative;left: -572px;top: -10px;background:#66bb6a;border: none;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal'.$j.'">
  <i class="fas fa-eye"></i>
</button>

<!-- Modal -->

    <div class="modal fade" id="exampleModal'.$j.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:750px;left:125%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><font color="green">'.DegerDondur($sampiyon_id).'</font> Maçınızın İstatistiklerini Görmektesiniz.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
        
        
            
            
            <!-- İNCELEME ALANI !-->
            <div>
            <img data-toggle="tooltip" title="Pozisyon" height="40px" src="'.$lane_kume.$lane_ismi.'">
            <span style="font-weight:bold;">'.$rol.'</span>
           
            <img data-toggle="tooltip" title="Takımının katlettiği kule sayısı" style="margin-left:25px;" height="40px" src="https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-match-history/global/default/tower-100.png"> : '.$kule.' 
            
            <img data-toggle="tooltip" title="Takımının katlettiği inhibitör sayısı" style="margin-left:25px;" height="40px" src="https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-match-history/global/default/inhibitor-100.png"> : '.$inhibitor.'
            
            <img data-toggle="tooltip" title="Kazanılan Altın [Senin]" style="margin-left:25px;margin-top:8px;" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"> : '.$gold.'
            <img data-toggle="tooltip" title="Kesilen minyon sayısı" style="margin-left:25px;margin-top:5px;" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/minion.png"> : '.$minyon.'
            <img data-toggle="tooltip" title="Öldürme / Ölüm / Asist" style="margin-left:25px;margin-top:10px;" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/score.png"> : <span style="color:green;font-weight:bold;">'.$kill.' </span>/ <span style="color:Red;font-weight:bold;">'.$death.' </span>/ <span style="color:orange;font-weight:bold;">'.$assists.'</span>
            
            </div>
            <br>
           
            <hr color="grey">
            
            <div class="oyuncular">
                
                <ul class="list-group" id="liste">
                    <li class="list-group-item list-group-item-light"><img data-toggle="tooltip" title="'.DegerDondur($oyuncu1_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu1_foto).'.png"> '.$oyuncu1.'</li>
                    <li class="list-group-item list-group-item-light"><img data-toggle="tooltip" title="'.DegerDondur($oyuncu2_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu2_foto).'.png"> '.$oyuncu2.'</li>
                    <li class="list-group-item list-group-item-light"><img data-toggle="tooltip" title="'.DegerDondur($oyuncu3_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu3_foto).'.png"> '.$oyuncu3.'</li>
                    <li class="list-group-item list-group-item-light"><img data-toggle="tooltip" title="'.DegerDondur($oyuncu4_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu4_foto).'.png"> '.$oyuncu4.'</li>
                    <li class="list-group-item list-group-item-light"><img data-toggle="tooltip" title="'.DegerDondur($oyuncu5_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu5_foto).'.png"> '.$oyuncu5.'</li>
                </ul>
                
                <img height="20px" style="position: absolute;height: 40px;margin-left: 76px;margin-top: 100;" src="/img/vs.png">
                
                 <ul class="list-group" id="liste2">
                    <li class="list-group-item list-group-item-light">'.$oyuncu6.' <img data-toggle="tooltip" title="'.DegerDondur($oyuncu6_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu6_foto).'.png"> </li>
                    <li class="list-group-item list-group-item-light">'.$oyuncu7.' <img data-toggle="tooltip" title="'.DegerDondur($oyuncu7_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu7_foto).'.png"> </li>
                    <li class="list-group-item list-group-item-light">'.$oyuncu8.' <img data-toggle="tooltip" title="'.DegerDondur($oyuncu8_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu8_foto).'.png"> </li>
                    <li class="list-group-item list-group-item-light">'.$oyuncu9.' <img data-toggle="tooltip" title="'.DegerDondur($oyuncu9_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu9_foto).'.png"> </li>
                    <li class="list-group-item list-group-item-light">'.$oyuncu10.'<img data-toggle="tooltip" title="'.DegerDondur($oyuncu10_foto).'" src="http://ddragon.leagueoflegends.com/cdn/9.14.1/img/champion/'.DegerDondur($oyuncu10_foto).'.png"> </li>
                </ul>
                
                
                
            </div>
            
            
            
     
        

        
        
        
        
        
        
        
        
        
        
        
      </div>
      <div class="modal-footer" style="height:60px;">
        <button type="button" class="btn btn-secondary" style="right:10px;" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
    
    
    </div>';
                  

                  
                
                }
                
            }        
        
    }
    
    
    
    ?>
    
    
    
   
    
    
    <?php 
    
               
    ?>


</div>



</body>




</html>


<?php 

}else {
    header("Location: login.php");
}


?>