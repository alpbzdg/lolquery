<?php 

$sampiyon_ismi = $_GET["karakter"];



$url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/tr_TR/champion/'.$sampiyon_ismi.'.json';



$sampiyon_bul = file_get_contents($url);
$sampiyon_icerik = json_decode($sampiyon_bul, true);

$sampiyon_id = $sampiyon_icerik['data'][$sampiyon_ismi]['name'];
$sampiyon_title = $sampiyon_icerik['data'][$sampiyon_ismi]['title'];
$sampiyon_hikaye = $sampiyon_icerik['data'][$sampiyon_ismi]['lore'];
$sampiyon_resim = $sampiyon_icerik['data'][$sampiyon_ismi]['id'];

$sampiyon_pasif = $sampiyon_icerik['data'][$sampiyon_ismi]['passive']['name'];
$sampiyon_pasif_aciklama = $sampiyon_icerik['data'][$sampiyon_ismi]['passive']['description'];
$sampiyon_pasif_foto = $sampiyon_icerik['data'][$sampiyon_ismi]['passive']['image']['full'];

$sampiyon_atak = $sampiyon_icerik['data'][$sampiyon_ismi]['info']['attack'];
$sampiyon_defans = $sampiyon_icerik['data'][$sampiyon_ismi]['info']['defense'];
$sampiyon_buyu = $sampiyon_icerik['data'][$sampiyon_ismi]['info']['magic'];
$sampiyon_zorluk = $sampiyon_icerik['data'][$sampiyon_ismi]['info']['difficulty'];


$sampiyon_q = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][0]['id'];
$sampiyon_q_isim = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][0]['name'];
$sampiyon_q_aciklama = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][0]['description'];

$sampiyon_w = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][1]['id'];
$sampiyon_w_isim = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][1]['name'];
$sampiyon_w_aciklama = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][1]['description'];

$sampiyon_e = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][2]['id'];
$sampiyon_e_isim = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][2]['name'];
$sampiyon_e_aciklama = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][2]['description'];

$sampiyon_r = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][3]['id'];
$sampiyon_r_isim = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][3]['name'];
$sampiyon_r_aciklama = $sampiyon_icerik['data'][$sampiyon_ismi]['spells'][3]['description'];


$resim_url = 'http://ddragon.leagueoflegends.com/cdn/img/champion/loading/'.$sampiyon_resim.'_0.jpg';



$pasif_url = 'http://ddragon.leagueoflegends.com/cdn/9.6.1/img/passive/'. $sampiyon_pasif_foto.'';
$q_url = 'http://ddragon.leagueoflegends.com/cdn/9.6.1/img/spell/'.$sampiyon_q.'.png';
$w_url = 'http://ddragon.leagueoflegends.com/cdn/9.6.1/img/spell/'.$sampiyon_w.'.png';
$e_url = 'http://ddragon.leagueoflegends.com/cdn/9.6.1/img/spell/'.$sampiyon_e.'.png';
$r_url = 'http://ddragon.leagueoflegends.com/cdn/9.6.1/img/spell/'.$sampiyon_r.'.png';


// http://ddragon.leagueoflegends.com/cdn/9.6.1/img/spell/FlashFrost.png skill foto











?>


<html>
<head>

<title>Sihirdar Günlüğü</title>
<link rel="stylesheet" href="css/sayfa.css">
<script src="https://kit.fontawesome.com/b63776f30f.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
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

<div class="orta-icerik">
    <br><br>
<div class="karakter">

<img style="height: 375px;position:absolute;margin-top: -22px;margin-left: -10px;" src="img/cerceve.png"  class="inner-image"/>

<img height="340px"  class="karakter-resim" src="<?php echo $resim_url;?>"/>  <span class="karakter-isim"><?php echo $sampiyon_id;?></span> <span class="karakter-title">" <?php echo $sampiyon_title; ?> "</span>

<a style="position: absolute;margin-top: 18px;font-size: 17pt;margin-left: 420px;" href="javascript:;">Kostümler İçin Tıkla</a>

<span class="kisa-hikaye">Kısa Hikaye</span>
 <p class="kisa-hikaye-icerik"><?php echo $sampiyon_hikaye; ?></p>
 <br>
 <br>
 <hr color="#2e3640" >
 
 <div class="bilgi">
 <span>ATAK : </span><div class="atak-cizgi"></div><br><br>
 <span>DEFANS : </span><div class="def-cizgi"></div><br><br>
 <span>BÜYÜ : </span><div class="buyu-cizgi"></div><br><br>
 <span>ZORLUK : </span><div class="zorluk-cizgi"></div><br>
 </div>


<?php 
if($sampiyon_atak == 1){
	echo '<style>.atak-cizgi{width:20px;transition:1s;}</style>';
}else if ($sampiyon_atak == 2){
	echo '<style>.atak-cizgi{width:40px;transition:1s;}</style>';
}else if ($sampiyon_atak == 3){
	echo '<style>.atak-cizgi{width:60px;transition:1s;}</style>';
}else if ($sampiyon_atak == 4){
	echo '<style>.atak-cizgi{width:80px;transition:1s;}</style>';
}else if ($sampiyon_atak == 5){
	echo '<style>.atak-cizgi{width:100px;transition:1s;}</style>';
}else if ($sampiyon_atak == 6){
	echo '<style>.atak-cizgi{width:120px;transition:1s;}</style>';
}else if ($sampiyon_atak == 7){
	echo '<style>.atak-cizgi{width:140px;transition:1s;}</style>';
}else if ($sampiyon_atak == 8){
	echo '<style>.atak-cizgi{width:160px;transition:1s;}</style>';
}else if ($sampiyon_atak == 9){
	echo '<style>.atak-cizgi{width:180px;transition:1s;}</style>';
}else {
	echo '<style>.atak-cizgi{width:200px;transition:1s;}</style>';
}
if($sampiyon_defans == 1){
	echo '<style>.def-cizgi{width:20px;transition:1s;}</style>';
}else if ($sampiyon_defans == 2){
	echo '<style>.def-cizgi{width:40px;transition:1s;}</style>';
}else if ($sampiyon_defans == 3){
	echo '<style>.def-cizgi{width:60px;transition:1s;}</style>';
}else if ($sampiyon_defans == 4){
	echo '<style>.def-cizgi{width:80px;transition:1s;}</style>';
}else if ($sampiyon_defans == 5){
	echo '<style>.def-cizgi{width:100px;transition:1s;}</style>';
}else if ($sampiyon_defans == 6){
	echo '<style>.def-cizgi{width:120px;transition:1s;}</style>';
}else if ($sampiyon_defans == 7){
	echo '<style>.def-cizgi{width:140px;transition:1s;}</style>';
}else if ($sampiyon_defans == 8){
	echo '<style>.def-cizgi{width:160px;transition:1s;}</style>';
}else if ($sampiyon_defans == 9){
	echo '<style>.def-cizgi{width:180px;transition:1s;}</style>';
}else {
	echo '<style>.def-cizgi{width:200px;transition:1s;}</style>';
}
if($sampiyon_buyu == 1){
	echo '<style>.buyu-cizgi{width:20px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 2){
	echo '<style>.buyu-cizgi{width:40px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 3){
	echo '<style>.buyu-cizgi{width:60px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 4){
	echo '<style>.buyu-cizgi{width:80px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 5){
	echo '<style>.buyu-cizgi{width:100px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 6){
	echo '<style>.buyu-cizgi{width:120px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 7){
	echo '<style>.buyu-cizgi{width:140px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 8){
	echo '<style>.buyu-cizgi{width:160px;transition:1s;}</style>';
}else if ($sampiyon_buyu == 9){
	echo '<style>.buyu-cizgi{width:180px;transition:1s;}</style>';
}else {
	echo '<style>.buyu-cizgi{width:200px;transition:1s;}</style>';
}
if($sampiyon_zorluk == 1){
	echo '<style>.zorluk-cizgi{width:20px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 2){
	echo '<style>.zorluk-cizgi{width:40px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 3){
	echo '<style>.zorluk-cizgi{width:60px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 4){
	echo '<style>.zorluk-cizgi{width:80px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 5){
	echo '<style>.zorluk-cizgi{width:100px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 6){
	echo '<style>.zorluk-cizgi{width:120px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 7){
	echo '<style>.zorluk-cizgi{width:140px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 8){
	echo '<style>.zorluk-cizgi{width:160px;transition:1s;}</style>';
}else if ($sampiyon_zorluk == 9){
	echo '<style>.zorluk-cizgi{width:180px;transition:1s;}</style>';
}else {
	echo '<style>.zorluk-cizgi{width:200px;transition:1s;}</style>';
}
?>

</div>
<br>
<br>
 <hr color="#2e3640" >
 <br>
 <br>
 
 
<div class="yetenekler">

<img title="<?php echo $sampiyon_pasif;?>" src="<?php echo $pasif_url; ?>"/><p style="position: absolute;margin-left: 80px;margin-top: -70px;width: 1000px;"><strong style="color:#123851;"><?php echo $sampiyon_pasif ?> : </strong><?php echo $sampiyon_pasif_aciklama;?></p>             <br /><br/><br><br>
<img title="<?php echo $sampiyon_q_isim;?>" src="<?php echo $q_url; ?>"/><p style="position: absolute;margin-left: 80px;margin-top: -70px;width: 1000px;"><strong style="color:#123851;"><?php echo $sampiyon_q_isim;?> ( Q ) :</strong> <?php echo $sampiyon_q_aciklama;?></p>  			<br /><br/><br><br>
<img title="<?php echo $sampiyon_w_isim;?>" src="<?php echo $w_url; ?>"/><p style="position: absolute;margin-left: 80px;margin-top: -70px;width: 1000px;"><strong style="color:#123851;"><?php echo $sampiyon_w_isim;?> ( W ) :</strong> <?php echo $sampiyon_w_aciklama;?></p>				<br /><br/><br/><br>
<img title="<?php echo $sampiyon_e_isim;?>" src="<?php echo $e_url; ?>"/><p style="position: absolute;margin-left: 80px;margin-top: -70px;width: 1000px;"><strong style="color:#123851;"><?php echo $sampiyon_e_isim;?> ( E ) :</strong> <?php echo $sampiyon_e_aciklama;?></p>				<br><br/><br/><br>
<img title="<?php echo $sampiyon_r_isim;?>" src="<?php echo $r_url; ?>"/><p style="position: absolute;margin-left: 80px;margin-top: -70px;width: 1000px;"><strong style="color:#123851;"><?php echo $sampiyon_r_isim;?> ( R ) :</strong><?php echo $sampiyon_r_aciklama;?> </p>				<br><br/><br><br>

</div>



</div>

</body>



</html>


<?php 

      

?>
