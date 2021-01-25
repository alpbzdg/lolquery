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
$url = "https://tr1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key=".$api_key;




$kullanici_id = $_SESSION["user_id"];

     $online_sorgu = "UPDATE users SET user_durum = 1 WHERE user_id = '$kullanici_id' ";
     
     mysqli_query($baglan, $online_sorgu);
      



$sampiyonlar_url = file_get_contents($url);
$sampiyonlar = json_decode($sampiyonlar_url, true);

  function DegerDondur($id){

switch($id){

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
case 7: return "LeBlanc"; break;
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




if($_SESSION["online"]){
    
 ?>




<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<link rel="stylesheet" href="css/tft.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" href="img/favicon.ico"/>
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Nasıl Oynanır?
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nasıl Oynanır?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Her tur dükkanda altın harcayarak LoL şampiyonlarını takımınıza katıyorsunuz. Oyun boyunca aynı kökeni ve sınıfı paylaşan şampiyonları seçerek özellik ilaveleri açıp takımınızı güçlendiriyorsunuz. Ayrıca aynı şampiyonun üç kopyasını birleştirerek onu süper biçimine yükseltebiliyor; üç süperi birleştirdiğinizdeyse şampiyonun ultra biçimine ulaşıyorsunuz.
        <br>
        <br>
        Takımınız rakibin tahtasına gittiğinde (rakibiniz de sizin tahtanıza gelebilir) savaş başlıyor. Savaş sırasında şampiyonlarınız otomatik olarak hareket eder, saldırır ve büyü kullanır. Tıpkı LoL'de olduğu gibi şampiyonlarınızdan tam verim alabilmek için takım kompozisyonlarınızı doğru seçmeli ve onları doğru konumlandırmalısınız.
        <br>
        <br>
        Her bir turun sonunda gelecek turlarda harcamak için altın kazanıyorsunuz. Ara sıra herkes özel bir etkinlik için toplanarak çeşitli güç düzeylerindeki tek bir şampiyon kadrosundan seçimler yapıyor. Oyuncuların seçim yapma sırası, mevcut sıralamalarının tersine göre belirleniyor. Böylece geriye düşen oyuncuların geri dönme şansı oluyor. Takım savaşlarını istikrarlı şekilde kazandığınızda can kaybetmekten kaçınıp rakiplerinize hasar verebiliyorsunuz. Ayakta kalan son oyuncuysanız oyunu kazanıyorsunuz. Bunu yaparken ara ara ifadelerinizi sıralamayı da unutmayın.
        <br>
        <br>
        
        
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>
    




<div class="orta-icerik">
    
    <br>
    
    <br>
    
    <br>
    
    <br>
    <br>
    <br>
    <br>
    <div class="linkler">
    <ul>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="top"    title="Ejderler <font color='#D980FA'>Büyü Hasarı</font> Almazlar. [2]" >Ejder</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Rakibin <font color='#12CBC4'>anlık manasını</font> %30 [2] , %50 [4] , %70 [6] oranla yakar ve aynı miktarda gerçek hasar vurur.">Demon</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="top"    title="Düz vuruşları %25 [2] , %35 [4] , %45 [6] ihtimalle rakibi <font color='yellow'> Sersemletir.</font>">Glacial</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Çifte hasar [2] olursa bir emperial [4] olursa tüm imperial'lar vurur.">Imperial</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="top"    title="Robotlar savaşa full <font color='#12CBC4'>mana</font> ile başlarlar.">Robot</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Sürgünler hiç bir sınıf ile yan yana koyulmazsa <font color='#4cd137'>canları</font> kadar ekstra kalkan ile savaşa başlar [1]">Sürgün</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-html="true" data-placement="top"    title="<font color='yellow'> +100 Zırh </font> ve her vuruşta <font color='#4cd137'>35 Can</font> doldurma rastgele bir dost [3] , bütün takım [6]">Asil</a></li>
<br>
<br>
<br>
<br>

<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"   data-html="true" title="Her <font color='#d63031'> PVP </font> turundan sonra 4 altına kadar ekstra rastgele <font color='yellow'>altın </font> kazandırır. [3]">Korsan</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Ninjalara <br> [1] : <font color='yellow'> %40 Saldırı Gücü </font> <br> [4] : <font color='yellow'> %60 Saldırı Gücü </font> ">Ninja</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="Bir rakibin <font color='#4cd137'>Canını </font> 100'e sabitleyerek savaşa başlar. [2]">Hayalet</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="bottom"  data-html="true" title="[3] Takımının saldırıları, rakibin <font color='grey'>Zırhını</font> %50 oranında yok sayar.">Hiçlik</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="Sınıflar düz vurdukça <font color='red'>Hiddet</font> biriktirir [Maksimum 5 yük]. Her yük %8 <font color='yellow'>Saldırı Hızı</font> verir. Vahşilere [2], herkese [4]">Vahşi</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Yordle'lara yapılan saldırılarda %20 [3], %50 [6], ihtimalle ıskalama ihtimali vardır.">Yordle</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="Şovalyeler düz vuruşlardan 20 [2] , 40 [4] , 80 [6] daha az hasar yer.">Şovalye</a></li>
<br>
<br>
<br>
<br>

<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="%50 ihtimalle, menzildeki ekstra bir hedefe [2], herkese vurma ihtimali [4]">Gunslinger</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Bütün brawler'lara +300 [2], +700 [4] ekstra <font color='#4cd137'>Can</font>.">Brawler</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="Dönüştüğünde, %100 <font color='#4cd137'>Canı</font> tekrar dolar [3]">Shapesifter</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Her 3 saniyede bir, Ranger'lar %25 [2], <br> %65 [4], <br> Şansla 3 saniyeliğine %200 <font color='yellow'>Saldırı Hızı</font> kazanır.">Ranger</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="Guardian'lar ve bitişiğindeki sınıflar +30 <font color='grey'>Zırh</font> ile savaşa başlar [2].">Guardian</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="bottom"  data-html="true" title="Blademaster'lar %35 ihtimalle bir vuruşunda iki kere [3] , <br> üç kere [6] vuruş yapar.">Blademaster</a></li>
<li><a href="javascript:;" data-toggle="tooltip" data-placement="top"  data-html="true" title="Assasin'ler +%150 [3], <br> %350 [6] <font color='orange'>Kritik Hasar</font> artışı kazanır.">Assasin</a></li>
<br>
<br>
<br>
<br>

<li style="position: relative;left: 325px;"><a href="javascript:;" data-placement="left"  data-toggle="tooltip" data-html="true" title="Takıma <br> +35 <font color='D980FA'>Yetenek Gücü</font> [3]<br> +100 <font color='D980FA'>Yetenek Gücü</font> [6]">Sorcerer</a></li>
<li style="position: relative;left: 343px;"><a href="javascript:;" data-placement="right" data-toggle="tooltip" data-html="true" title="Her savaş başında, bir Elemental sınıf savaşa katılır. [3]">Elementalist</a></li>
</ul>
  </div>





<div class="row" style="position: relative;left: -274px;top: 100px;">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
     
      <a onclick="document.getElementById('sound1').play();" class="nav-link active" id="v-pills-ejder-tab" data-toggle="pill" href="#v-pills-ejder" role="tab" aria-controls="v-pills-ejder" aria-selected="true">Ejder &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_dragon.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-demon-tab" data-toggle="pill" href="#v-pills-demon" role="tab" aria-controls="v-pills-demon" aria-selected="false">Demon &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_demon.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-glacial-tab" data-toggle="pill" href="#v-pills-glacial" role="tab" aria-controls="v-pills-glacial" aria-selected="false">Glacial &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_glacial.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-imperial-tab" data-toggle="pill" href="#v-pills-imperial" role="tab" aria-controls="v-pills-imperial" aria-selected="false">Imperial &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_imperial.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-robot-tab" data-toggle="pill" href="#v-pills-robot" role="tab" aria-controls="v-pills-robot" aria-selected="false">Robot &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_robot.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-sürgün-tab" data-toggle="pill" href="#v-pills-sürgün" role="tab" aria-controls="v-pills-sürgün" aria-selected="false">Sürgün &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_exile.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-asil-tab" data-toggle="pill" href="#v-pills-asil" role="tab" aria-controls="v-pills-asil" aria-selected="false">Asil &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_noble.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-korsan-tab" data-toggle="pill" href="#v-pills-korsan" role="tab" aria-controls="v-pills-korsan" aria-selected="false">Korsan &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_pirate.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-ninja-tab" data-toggle="pill" href="#v-pills-ninja" role="tab" aria-controls="v-pills-ninja" aria-selected="false">Ninja &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_ninja.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-hayalet-tab" data-toggle="pill" href="#v-pills-hayalet" role="tab" aria-controls="v-pills-hayalet" aria-selected="false">Hayalet &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_phantom.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-hiclik-tab" data-toggle="pill" href="#v-pills-hiclik" role="tab" aria-controls="v-pills-hiclik" aria-selected="false">Hiçlik &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_void.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-vahsi-tab" data-toggle="pill" href="#v-pills-vahsi" role="tab" aria-controls="v-pills-vahsi" aria-selected="false">Vahşi &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_wild.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-yordle-tab" data-toggle="pill" href="#v-pills-yordle" role="tab" aria-controls="v-pills-yordle" aria-selected="false">Yordle &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_yordle.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-sovalye-tab" data-toggle="pill" href="#v-pills-sovalye" role="tab" aria-controls="v-pills-sovalye" aria-selected="false">Şovalye &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_knight.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-gunslinger-tab" data-toggle="pill" href="#v-pills-gunslinger" role="tab" aria-controls="v-pills-gunslinger" aria-selected="false">Gunslinger &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_gunslinger.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-brawler-tab" data-toggle="pill" href="#v-pills-brawler" role="tab" aria-controls="v-pills-brawler" aria-selected="false">Brawler &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_brawler.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-shapesifter-tab" data-toggle="pill" href="#v-pills-shapesifter" role="tab" aria-controls="v-pills-shapesifter" aria-selected="false">Shapesifter &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_shapeshifter.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-ranger-tab" data-toggle="pill" href="#v-pills-ranger" role="tab" aria-controls="v-pills-ranger" aria-selected="false">Ranger &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_ranger.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-guardian-tab" data-toggle="pill" href="#v-pills-guardian" role="tab" aria-controls="v-pills-guardian" aria-selected="false">Guardian &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_guardian.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-blademaster-tab" data-toggle="pill" href="#v-pills-blademaster" role="tab" aria-controls="v-pills-blademaster" aria-selected="false">Blademaster &nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_blademaster.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-assasin-tab" data-toggle="pill" href="#v-pills-assasin" role="tab" aria-controls="v-pills-assasin" aria-selected="false">Assasin &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_assassin.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-sorcerer-tab" data-toggle="pill" href="#v-pills-sorcerer" role="tab" aria-controls="v-pills-sorcerer" aria-selected="false">Sorcerer &nbsp&nbsp&nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_sorcerer.png"></a>
      <a onclick="document.getElementById('sound1').play();" class="nav-link" id="v-pills-elementalist-tab" data-toggle="pill" href="#v-pills-elementalist" role="tab" aria-controls="v-pills-elementalist" aria-selected="false">Elementalist &nbsp&nbsp<img src="http://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_elementalist.png"></a>
   
   </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-ejder" role="tabpanel" aria-labelledby="v-pills-ejder-tab">
      
                      <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/shyvana/hud/shyvana_circle_0.png"></th>
                      <td>Shyvana</td>
                      <td>3</td>
                      <td>550</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/aurelionsol/hud/aurelionsol_circle.png"></th>
                      <td>Aurelion Sol</td>
                      <td>4</td>
                      <td>600</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                   
                  </tbody>
                </table>
                      
      
      
      <audio id="sound1" src="http://raw.communitydragon.org/latest/plugins/rcp-fe-lol-match-history/global/default/sfx-uikit-generic-click-small.ogg" preload="auto"></audio>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-demon" role="tabpanel" aria-labelledby="v-pills-demon-tab">
        
             <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/evelynn/hud/evelynn_circle.png"></th>
                      <td>Evelynn</td>
                      <td>3</td>
                      <td>550</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/elise/hud/elise_circle.png"></th>
                      <td>Elise</td>
                      <td>1</td>
                      <td>500</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/swain/hud/swain_circle_0.png"></th>
                      <td>Swain</td>
                      <td>5</td>
                      <td>850</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/aatrox/hud/aatrox_circle.png"></th>
                      <td>Aatrox</td>
                      <td>3</td>
                      <td>750</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/morgana/hud/morgana_circle_0.png"></th>
                      <td>Morgana</td>
                      <td>3</td>
                      <td>650</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/brand/hud/brand_circle_0.png"></th>
                      <td>Brand</td>
                      <td>4</td>
                      <td>700</td>
                      <td>60</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/varus/hud/varus_circle_0.png"></th>
                      <td>Varus</td><!-- şampiyon ismi !-->
                      <td>2</td><!-- cost !-->
                      <td>500</td> <!-- health !-->
                      <td>50</td> <!-- damage !-->
                      <td>25</td> <!-- armor!-->
                      <td>20</td> <!-- magic resist!-->
                    </tr>
                  </tbody>
                </table>
      
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-glacial" role="tabpanel" aria-labelledby="v-pills-glacial-tab">
          
          
           <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/anivia/hud/anivia_circle_1.png"></th>
                      <td>Anivia</td>
                      <td>5</td>
                      <td>650</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/sejuani/hud/sejuani_circle_0.png"></th>
                      <td>Sejuani</td>
                      <td>4</td>
                      <td>850</td>
                      <td>45</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/ashe/hud/ashe_circle.png"></th>
                      <td>Ashe</td>
                      <td>3</td>
                      <td>550</td>
                      <td>60</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/volibear/hud/volibear_circle.png"></th>
                      <td>Volibear</td>
                      <td>3</td>
                      <td>650</td>
                      <td>75</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/braum/hud/braum_circle.png"></th>
                      <td>Braum</td>
                      <td>2</td>
                      <td>750</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/lissandra/hud/lissandra_circle.png"></th>
                      <td>Lissandra</td>
                      <td>2</td>
                      <td>450</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
          
    
      </div>
      
      <div class="tab-pane fade" id="v-pills-imperial" role="tabpanel" aria-labelledby="v-pills-imperial-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/swain/hud/swain_circle_0.png"></th>
                      <td>Swain</td>
                      <td>5</td>
                      <td>850</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/darius/hud/darius_circle_0.png"></th>
                      <td>Darius</td>
                      <td>1</td>
                      <td>600</td>
                      <td>50</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/katarina/hud/katarina_circle.png"></th>
                      <td>Katarina</td>
                      <td>3</td>
                      <td>450</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/draven/hud/draven_circle.png"></th>
                      <td>Draven</td>
                      <td>4</td>
                      <td>700</td>
                      <td>75</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-robot" role="tabpanel" aria-labelledby="v-pills-robot-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/blitzcrank/hud/blitzcrank_circle_1.png"></th>
                      <td>Blitzcrank</td>
                      <td>2</td>
                      <td>600</td>
                      <td>50</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                   
                  </tbody>
                </table>
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-sürgün" role="tabpanel" aria-labelledby="v-pills-sürgün-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/tft_yasuo/hud/tft_yasuo_square.tft.png"></th>
                      <td>Yasuo</td>
                      <td>5</td>
                      <td>700</td>
                      <td>65</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                   
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-asil" role="tabpanel" aria-labelledby="v-pills-asil-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/leona/hud/leona_circle.png"></th>
                      <td>Leona</td>
                      <td>4</td>
                      <td>750</td>
                      <td>45</td>
                      <td>55</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/tft_vayne/hud/tft_vayne_square.tft.png"></th>
                      <td>Vayne</td>
                      <td>1</td>
                      <td>550</td>
                      <td>45</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/lucian/hud/lucian_circle.png"></th>
                      <td>Lucian</td>
                      <td>2</td>
                      <td>600</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/fiora/hud/fiora_circle.png"></th>
                      <td>Fiora</td>
                      <td>1</td>
                      <td>400</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/garen/hud/garen_circle.png"></th>
                      <td>Garen</td>
                      <td>1</td>
                      <td>600</td>
                      <td>55</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/kayle/hud/kayle_circle_0.kayle_rework.png"></th>
                      <td>Kayle</td>
                      <td>5</td>
                      <td>800</td>
                      <td>70</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-korsan" role="tabpanel" aria-labelledby="v-pills-korsan-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/graves/hud/graves_circle.png"></th>
                      <td>Graves</td>
                      <td>1</td>
                      <td>550</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/pyke/hud/pyke_circle_0.png"></th>
                      <td>Pyke</td>
                      <td>2</td>
                      <td>600</td>
                      <td>60</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/twistedfate/hud/twistedfate_circle_0.png"></th>
                      <td>Twisted Fate</td>
                      <td>2</td>
                      <td>450</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/gangplank/hud/gangplank_circle.png"></th>
                      <td>Gangplank</td>
                      <td>3</td>
                      <td>650</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/missfortune/hud/missfortune_circle_0.png"></th>
                      <td>Miss Fortune</td>
                      <td>5</td>
                      <td>650</td>
                      <td>75</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-ninja" role="tabpanel" aria-labelledby="v-pills-ninja-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/shen/hud/shen_circle.png"></th>
                      <td>Shen</td>
                      <td>2</td>
                      <td>650</td>
                      <td>65</td>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/kennen/hud/kennen_circle.png"></th>
                      <td>Kennen</td>
                      <td>3</td>
                      <td>550</td>
                      <td>60</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/akali/hud/akali_circle.png"></th>
                      <td>Akali</td>
                      <td>4</td>
                      <td>700</td>
                      <td>70</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/zed/hud/zed_circle_0.png"></th>
                      <td>Zed</td>
                      <td>2</td>
                      <td>500</td>
                      <td>60</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
        
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-hayalet" role="tabpanel" aria-labelledby="v-pills-hayalet-tab">
          
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/karthus/hud/karthus_circle.png"></th>
                      <td>Karthus</td>
                      <td>5</td>
                      <td>850</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/mordekaiser/hud/mordekaiser_circle_0.mordevgu.png"></th>
                      <td>Mordekaiser</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/kindred/hud/kindred_circle.png"></th>
                      <td>Kindred</td>
                      <td>4</td>
                      <td>600</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>

                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-hiclik" role="tabpanel" aria-labelledby="v-pills-hiclik-tab">
          
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/khazix/hud/khazix_circle.png"></th>
                      <td>Kha'Zix</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/reksai/hud/reksai_circle.png"></th>
                      <td>Rek'Sai</td>
                      <td>2</td>
                      <td>650</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/chogath/hud/chogath_circle_1.png"></th>
                      <td>Cho'Gath</td>
                      <td>4</td>
                      <td>1100</td>
                      <td>70</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/kassadin/hud/kassadin_circle_0.png"></th>
                      <td>Kassadin</td>
                      <td>1</td>
                      <td>550</td>
                      <td>45</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>

                  </tbody>
                </table>
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-vahsi" role="tabpanel" aria-labelledby="v-pills-vahsi-tab">
          
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/rengar/hud/rengar_circle_0.png"></th>
                      <td>Rengar</td>
                      <td>3</td>
                      <td>550</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/ahri/hud/ahri_circle.png"></th>
                      <td>Ahri</td>
                      <td>2</td>
                      <td>450</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/nidalee/hud/nidalee_circle.png"></th>
                      <td>Nidalee</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>


                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/gnar/hud/gnar_circle.png"></th>
                      <td>Gnar</td>
                      <td>4</td>
                      <td>850</td>
                      <td>45</td>
                      <td>24</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/warwick/hud/warwick_circle_0.png"></th>
                      <td>Warwick</td>
                      <td>1</td>
                      <td>600</td>
                      <td>50</td>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-yordle" role="tabpanel" aria-labelledby="v-pills-yordle-tab">
          
          
              <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/kennen/hud/kennen_circle.png"></th>
                      <td>Kennen</td>
                      <td>3</td>
                      <td>550</td>
                      <td>60</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/lulu/hud/lulu_circle_0.png"></th>
                      <td>Lulu</td>
                      <td>2</td>
                      <td>500</td>
                      <td>50</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/tristana/hud/tristana_circle.png"></th>
                      <td>Tristana</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/gnar/hud/gnar_circle.png"></th>
                      <td>Gnar</td>
                      <td>4</td>
                      <td>850</td>
                      <td>45</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/veigar/hud/veigar_circle.png"></th>
                      <td>Veigar</td>
                      <td>3</td>
                      <td>450</td>
                      <td>45</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                   
                   <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/poppy/hud/poppy_circle.png"></th>
                      <td>Poppy</td>
                      <td>3</td>
                      <td>750</td>
                      <td>50</td>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-sovalye" role="tabpanel" aria-labelledby="v-pills-sovalye-tab">
          
           <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/mordekaiser/hud/mordekaiser_circle_0.mordevgu.png"></th>
                      <td>Mordekaiser</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/sejuani/hud/sejuani_circle_0.png"></th>
                      <td>Sejuani</td>
                      <td>4</td>
                      <td>850</td>
                      <td>45</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/darius/hud/darius_circle_0.png"></th>
                      <td>Darius</td>
                      <td>1</td>
                      <td>600</td>
                      <td>50</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/garen/hud/garen_circle.png"></th>
                      <td>Garen</td>
                      <td>1</td>
                      <td>600</td>
                      <td>55</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/poppy/hud/poppy_circle.png"></th>
                      <td>Poppy</td>
                      <td>3</td>
                      <td>750</td>
                      <td>50</td>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                  
                  <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/kayle/hud/kayle_circle_0.kayle_rework.png"></th>
                      <td>Kayle</td>
                      <td>5</td>
                      <td>800</td>
                      <td>70</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-gunslinger" role="tabpanel" aria-labelledby="v-pills-gunslinger-tab">
          
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/graves/hud/graves_circle.png"></th>
                      <td>Graves</td>
                      <td>1</td>
                      <td>550</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                      <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/tristana/hud/tristana_circle.png"></th>
                      <td>Tristana</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/lucian/hud/lucian_circle.png"></th>
                      <td>Lucian</td>
                      <td>2</td>
                      <td>600</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/gangplank/hud/gangplank_circle.png"></th>
                      <td>Gangplank</td>
                      <td>3</td>
                      <td>650</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/missfortune/hud/missfortune_circle_0.png"></th>
                      <td>Miss Fortune</td>
                      <td>5</td>
                      <td>650</td>
                      <td>75</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    
                  </tbody>
                </table>
          
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-brawler" role="tabpanel" aria-labelledby="v-pills-brawler-tab">
      
      
      <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/reksai/hud/reksai_circle.png"></th>
                      <td>Rek'Sai</td>
                      <td>2</td>
                      <td>650</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/blitzcrank/hud/blitzcrank_circle_1.png"></th>
                      <td>Blitzcrank</td>
                      <td>2</td>
                      <td>600</td>
                      <td>50</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/volibear/hud/volibear_circle.png"></th>
                      <td>Volibear</td>
                      <td>3</td>
                      <td>650</td>
                      <td>75</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/chogath/hud/chogath_circle_1.png"></th>
                      <td>Cho'Gath</td>
                      <td>4</td>
                      <td>1100</td>
                      <td>70</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/warwick/hud/warwick_circle_0.png"></th>
                      <td>Warwick</td>
                      <td>1</td>
                      <td>600</td>
                      <td>50</td>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                    
                    
                  </tbody>
                </table>
 
      </div>
      
      <div class="tab-pane fade" id="v-pills-shapesifter" role="tabpanel" aria-labelledby="v-pills-shapesifter-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/swain/hud/swain_circle_0.png"></th>
                      <td>Swain</td>
                      <td>5</td>
                      <td>850</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/shyvana/hud/shyvana_circle_0.png"></th>
                      <td>Shyvana</td>
                      <td>3</td>
                      <td>550</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/elise/hud/elise_circle.png"></th>
                      <td>Elise</td>
                      <td>1</td>
                      <td>500</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/nidalee/hud/nidalee_circle.png"></th>
                      <td>Nidalee</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="https://raw.communitydragon.org/latest/game/assets/characters/gnar/hud/gnar_circle.png"></th>
                      <td>Gnar</td>
                      <td>4</td>
                      <td>850</td>
                      <td>45</td>
                      <td>24</td>
                      <td>20</td>
                    </tr>

                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-ranger" role="tabpanel" aria-labelledby="v-pills-ranger-tab">
          
           <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/ashe/hud/ashe_circle.png"></th>
                      <td>Ashe</td>
                      <td>3</td>
                      <td>550</td>
                      <td>60</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/kindred/hud/kindred_circle.png"></th>
                      <td>Kindred</td>
                      <td>4</td>
                      <td>600</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/vayne/hud/vayne_circle.png"></th>
                      <td>Vayne</td>
                      <td>1</td>
                      <td>550</td>
                      <td>45</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/varus/hud/varus_circle_0.png"></th>
                      <td>Varus</td>
                      <td>2</td>
                      <td>500</td>
                      <td>50</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-guardian" role="tabpanel" aria-labelledby="v-pills-guardian-tab">
          
           <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/leona/hud/leona_circle.png"></th>
                      <td>Leona</td>
                      <td>4</td>
                      <td>750</td>
                      <td>45</td>
                      <td>55</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/braum/hud/braum_circle.png"></th>
                      <td>Braum</td>
                      <td>2</td>
                      <td>750</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    
                  </tbody>
                </table>
          
          
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-blademaster" role="tabpanel" aria-labelledby="v-pills-blademaster-tab">
          
             <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/shen/hud/shen_circle.png"></th>
                      <td>Shen</td>
                      <td>2</td>
                      <td>650</td>
                      <td>65</td>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/aatrox/hud/aatrox_circle.png"></th>
                      <td>Aatrox</td>
                      <td>3</td>
                      <td>750</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/fiora/hud/fiora_circle.png"></th>
                      <td>Fioara</td>
                      <td>1</td>
                      <td>400</td>
                      <td>40</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/gangplank/hud/gangplank_circle.png"></th>
                      <td>GangPlank</td>
                      <td>3</td>
                      <td>650</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/yasuo/hud/yasuo_circle.png"></th>
                      <td>Yasuo</td>
                      <td>5</td>
                      <td>700</td>
                      <td>65</td>
                      <td>35</td>
                      <td>20</td>
                    </tr>
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/draven/hud/draven_circle.png"></th>
                      <td>Draven</td>
                      <td>5</td>
                      <td>700</td>
                      <td>75</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-assasin" role="tabpanel" aria-labelledby="v-pills-assasin-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/khazix/hud/khazix_circle.png"></th>
                      <td>Kha'Zix</td>
                      <td>1</td>
                      <td>500</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/evelynn/hud/evelynn_circle.png"></th>
                      <td>Evelynn</td>
                      <td>3</td>
                      <td>550</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/akali/hud/akali_circle.png"></th>
                      <td>Akali</td>
                      <td>4</td>
                      <td>700</td>
                      <td>70</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/rengar/hud/rengar_circle_0.png"></th>
                      <td>Rengar</td>
                      <td>3</td>
                      <td>550</td>
                      <td>55</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/pyke/hud/pyke_circle_0.png"></th>
                      <td>Pyke</td>
                      <td>2</td>
                      <td>600</td>
                      <td>60</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/zed/hud/zed_circle_0.png"></th>
                      <td>Zed</td>
                      <td>2</td>
                      <td>500</td>
                      <td>60</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/katarina/hud/katarina_circle.png"></th>
                      <td>Katarina</td>
                      <td>3</td>
                      <td>450</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-sorcerer" role="tabpanel" aria-labelledby="v-pills-sorcerer-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/karthus/hud/karthus_circle.png"></th>
                      <td>Karthus</td>
                      <td>5</td>
                      <td>850</td>
                      <td>65</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/lulu/hud/lulu_circle_0.png"></th>
                      <td>Lulu</td>
                      <td>2</td>
                      <td>500</td>
                      <td>50</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/twistedfate/hud/twistedfate_circle_0.png"></th>
                      <td>Twisted Fate</td>
                      <td>2</td>
                      <td>450</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/ahri/hud/ahri_circle.png"></th>
                      <td>Ahri</td>
                      <td>2</td>
                      <td>450</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/morgana/hud/morgana_circle_0.png"></th>
                      <td>Morgana</td>
                      <td>3</td>
                      <td>650</td>
                      <td>50</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/aurelionsol/hud/aurelionsol_circle.png"></th>
                      <td>Aurelion Sol</td>
                      <td>5</td>
                      <td>600</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/veigar/hud/veigar_circle.png"></th>
                      <td>Veigar</td>
                      <td>3</td>
                      <td>450</td>
                      <td>45</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                      <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/kassadin/hud/kassadin_circle_0.png"></th>
                      <td>Kassadin</td>
                      <td>1</td>
                      <td>550</td>
                      <td>45</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                  </tbody>
                </table>
      
      </div>
      
      <div class="tab-pane fade" id="v-pills-elementalist" role="tabpanel" aria-labelledby="v-pills-elementalist-tab">
          
          <table class="table table">
                  <thead>
                    <tr>
                      <th style="border-bottom:none;" scope="col">Resim</th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Şampiyon İsim" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Fiyat" style="position:relative;top:6px;" height="32" width="32" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/gold.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Can" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodshealthscalingicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Hasar" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsattackspeedicon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Zırh" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsarmoricon.png"></th>
                      <th style="border-bottom:none;" scope="col"><img data-toggle="tooltip" data-html="true" data-placement="top" title="Büyü Direnci" height="32" width="32" src="https://raw.communitydragon.org/pbe/plugins/rcp-be-lol-game-data/global/default/v1/perk-images/statmods/statmodsmagicresicon.png"></th>
                    </tr>
                  </thead>
                  <tbody>
                      
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/anivia/hud/anivia_circle_1.png"></th>
                      <td>Anivia</td>
                      <td>5</td>
                      <td>650</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                     <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/kennen/hud/kennen_circle.png"></th>
                      <td>Kennen</td>
                      <td>3</td>
                      <td>550</td>
                      <td>60</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/brand/hud/brand_circle_0.png"></th>
                      <td>Brand</td>
                      <td>4</td>
                      <td>700</td>
                      <td>60</td>
                      <td>25</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <th style="border-bottom:none;" scope="row"><img height="50px" src="http://raw.communitydragon.org/latest/game/assets/characters/lissandra/hud/lissandra_circle.png"></th>
                      <td>Lissandra</td>
                      <td>2</td>
                      <td>450</td>
                      <td>40</td>
                      <td>20</td>
                      <td>20</td>
                    </tr>
                  </tbody>
                </table>
      
      </div>
      
      
      
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>



















    
</div>



<style>

.linkler{
    list-style:none;
}

.linkler li a{
    color:#2f3640;
    text-decoration:none;
    font-weight:bold;
    transition:1s;
}

.linkler li a:hover{
    color:#007bff;
    transition:1s;
}



</style>


<footer style="background:#fff;border-top:2px dashed #2f3640;margin-top:810px;" class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" >
                  <p>Destek için : destek@lqs.com.tr</p>
                  <p>Bu uygulamanın yapılma amacı oyuncuların daha iyi şekilde oyun oynamalarıdır.</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6 style="padding:3px;border-bottom:1px solid #000;"> Şirket hakkında</h6>
               <p>LQS , Riot Games'den bağımsız bir şirkettir. Hiç bir oyun içi resim, LQS'ye ait değildir.</p>
               <a href="#" class="btn-footer"> Künye </a><br>
               <a href="#" class="btn-footer"> İletişim</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6 style="padding:3px;border-bottom:1px solid #000;"> Bağlantılar</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul class="linkler">
                        <li> <a href="#"> Ana Sayfa</a> </li>
                        <li> <a href="#"> Hakkımızda</a> </li>
                        <li> <a href="#"> Sosyal Medya</a> </li>
                        <li> <a href="#"> Takım Savaşları</a> </li>
                        <li> <a href="#"> Destek</a></li>
                        <li> <a href="#"> İletişim</a></li>
                     </ul>
                  </div>
                  
               </div>
            </div>
            <div class="col-md-6 ">
               <h6 style="padding:3px;border-bottom:1px solid #000;"> Haberler</h6>
               <div class="social">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </div>
               <form class="form-footer my-3">
                  <input type="text"  placeholder="search here...." name="search">
                  <input type="button" value="Go" >
               </form>
               <p>Aradın bulamadın mı? <a href="#">Yardım</a></p>
            </div>
         </div>
      </div>
   </div>
</div>
</footer>

</body>




</html>


<?php 

}else {
    header("Location: login.php");
}


?>