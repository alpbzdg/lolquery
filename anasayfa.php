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
    <center><font color="#a37c30" style="font-weight:bold;">PROFİL SORGULAMA KISAYOLU</font></center>
    <div class="oyuncu-ara">
        
        <form method="POST" action="profil_sonuc.php">
          <center>
            Oyuncu Adı: <input type="text" name="kadi"> <span>Sunucu: </span>
                
                <select name="server">
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
            
            <input type="submit" value="OYUNCU ARA">
            
            </center>   
            
            
        </form>
        
    </div>
    
    <br />
    <br />
    <?php 
    
            // OTOMATİK GÜNCELLENEN SLIDER DEĞİŞKENLERİ.
    
            $haber_json_url= "http://lolquery.codingtr.com/webservice/results.json";
            $haber_json_al = file_get_contents($haber_json_url);
            $haber_json_parcala = json_decode($haber_json_al,true);
    
                
                $haber_baslik_1 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-1]["baslik"];
                $haber_ozet_1 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-1]["ozet"];
                $haber_foto_1 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-1]["foto"];
                $haber_link_1 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-1]["link"];
                
                $haber_baslik_2 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-2]["baslik"];
                $haber_ozet_2 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-2]["ozet"];
                $haber_foto_2 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-2]["foto"];
                $haber_link_2 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-2]["link"];
                
                $haber_baslik_3 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-3]["baslik"];
                $haber_ozet_3 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-3]["ozet"];
                $haber_foto_3 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-3]["foto"];
                $haber_link_3 = $haber_json_parcala["posts"][count($haber_json_parcala["posts"])-3]["link"];


    ?>
    
    
   
       <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="border-radius:5px;">
      <div class="carousel-item active">
        <img src="img/<?php echo $haber_foto_1;?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="slider1-a">
          <a href="Haberler.php<?php echo '?link='.$haber_link_1;?>"><h5><?php echo $haber_baslik_1?></h5></a>
          <p><?php echo $haber_ozet_1?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/<?php echo $haber_foto_2;?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="slider2-a">
          <a href="Haberler.php<?php echo '?link='.$haber_link_2;?>"><h5><?php echo $haber_baslik_2?></h5></a>
          <p><?php echo $haber_ozet_2;?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/<?php echo $haber_foto_3;?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="slider3-a">
          <a href="Haberler.php<?php echo '?link='.$haber_link_3;?>"><h5><?php echo $haber_baslik_3?></h5></a>
          <p><?php echo $haber_ozet_3?></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        
   
    
    <br />
    
    <script lang="javascript">
        
         $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
        
    </script>
    
    
    
    
    <div class="rotasyon">
        <br>
    <br>
    <center><h1 style="border:2px dashed #2f3640;padding:6px;">BU HAFTAKİ ÜCRETSİZ ŞAMPİYON ROTASYONU!</h1></center>
    <br>
        <br>
    <?php 
    
    for($i=0;$i<count($sampiyonlar['freeChampionIds']);$i++){
    
    $isim = DegerDondur($sampiyonlar['freeChampionIds'][$i]);
    
    $url = "http://ddragon.leagueoflegends.com/cdn/img/champion/loading/".DegerDondur($sampiyonlar['freeChampionIds'][$i])."_0.jpg";
    
  
    /*if($sampiyonlar['freeChampionIds'][$i] == 7){
        echo '<br />';
    }
    echo "<img height='220px' style='float:left;' title1='".DegerDondur($sampiyonlar['freeChampionIds'][$i])."' src='".$url."'/>";
       
    }
    */
    ?>
    <figure class="snip1104 blue">
  <img src="<?php echo $url;?>" alt="sample33" />
  <figcaption>
    <h2><?php echo DegerDondur($sampiyonlar['freeChampionIds'][$i])?></h2>
  </figcaption>
  <a href="<?php echo "karakter.php?karakter=".$isim;?>"></a>
</figure>

  
    <?php 
    
    }
    
    

    ?>
    
    </div>
  
     <br>
    <br>
    <br>
    
   
    
    
    
    <div class="haber-section">
        <br />
        <br />
        <center><h2 style="margin-top:50px;">Haberler</h2></center>
        <div class="dropdown-divider"></div>
        <br><br>
        
         <?php 
    
    
            $haber_json_url= "http://lolquery.codingtr.com/webservice/results.json";
            $haber_json_al = file_get_contents($haber_json_url);
            $haber_json_parcala = json_decode($haber_json_al,true);
            
            $i = 0;
                
                for($i=0;$i<count($haber_json_parcala["posts"]);$i++){
                    
                $haber_id = $haber_json_parcala["posts"][$i]["haber_id"];
                $haber_yazan = $haber_json_parcala["posts"][$i]["yazan"];
                $haber_baslik = $haber_json_parcala["posts"][$i]["baslik"];
                $haber_yazi = $haber_json_parcala["posts"][$i]["yazi"];
                $haber_ozet = $haber_json_parcala["posts"][$i]["ozet"];
                $haber_kategori = $haber_json_parcala["posts"][$i]["kategori"];
                $haber_foto = $haber_json_parcala["posts"][$i]["foto"];
                $haber_link = $haber_json_parcala["posts"][$i]["link"];
                
                $haber_ozet_str = substr($haber_ozet,0,140);
                
            
            
    ?>
        
                <div class="card mb-3" style="border-radius: calc(.25rem - 1px);">
          <div class="row no-gutters">
            <div class="col-md-4">
             <a href="Haberler.php<?php echo '?link='.$haber_link;?>"><img height="164px" src="img/<?php echo $haber_foto?>" class="card-img" alt=""></a> 
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $haber_baslik;?></h5>
                <p class="card-text"><?php echo $haber_ozet_str;?></p>
                <a href="Haberler.php<?php echo '?link='.$haber_link;?>" class="btn btn-primary" style="height: 35px;font-size: 11pt;">Devamını Oku</a><br>
              </div>
            </div>
          </div>
        </div>
        
        <br>
       
         <?php 
    
    
                }
    ?>
        
    </div>
   
    
    
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


<footer style="background:#fff;border-top:2px dashed #2f3640" class="container-fluid bg-grey py-5">
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