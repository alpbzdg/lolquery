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



<html>
    <head>
          <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    </head>
    
    
    <body>
        
        <style>
            *{
                font-family:Cairo;
            }
            
        </style>
        
      
        
        <?php 
           
            
            
            
            $sohbet_link = "http://lolquery.codingtr.com/webservice/mesajlar.json";
            $sohbet_al = file_get_contents($sohbet_link);
            $sohbet_parse = json_decode($sohbet_al, true);
            
            
                $icerik_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["icerik"];
                $oyun_modu_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["oyun_modu"];
                $aranan_kisi_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["aranan_kisi"];
                $link_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["link"];
                $oyuncu_nick_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["oyuncu_nick"];
                $tarih_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["tarih"];
                $oyuncu_resmi_1 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-1]["oyuncu_resmi"];
                
                  
             $oyuncu_resmi_1 = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/profileicon/".$oyuncu_resmi_1.".png";
                
                
                 $icerik_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["icerik"];
                $oyun_modu_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["oyun_modu"];
                $aranan_kisi_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["aranan_kisi"];
                $link_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["link"];
                $oyuncu_nick_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["oyuncu_nick"];
                $tarih_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["tarih"];
                $oyuncu_resmi_2 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-2]["oyuncu_resmi"];
               
                  
             $oyuncu_resmi_2 = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/profileicon/".$oyuncu_resmi_2.".png";
                
               $icerik_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["icerik"];
                $oyun_modu_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["oyun_modu"];
                $aranan_kisi_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["aranan_kisi"];
                $link_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["link"];
                $oyuncu_nick_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["oyuncu_nick"];
                $tarih_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["tarih"];
                $oyuncu_resmi_3 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-3]["oyuncu_resmi"];
               
                  
             $oyuncu_resmi_3 = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/profileicon/".$oyuncu_resmi_3.".png";
                
                   $icerik_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["icerik"];
                $oyun_modu_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["oyun_modu"];
                $aranan_kisi_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["aranan_kisi"];
                $link_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["link"];
                $oyuncu_nick_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["oyuncu_nick"];
                $tarih_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["tarih"];
                $oyuncu_resmi_4 = $sohbet_parse["posts"][count($sohbet_parse["posts"])-4]["oyuncu_resmi"];
               
                  
             $oyuncu_resmi_4 = "http://ddragon.leagueoflegends.com/cdn/9.14.1/img/profileicon/".$oyuncu_resmi_4.".png";
                
                
            
        
            
        ?>
        
      
        
            <div class="card mb-3" style="height:182px;max-width:800px;margin-left:5px;margin-top:5px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img style="border-bottom-right-radius:0px;border-top-right-radius:0px;height:180px;width:180px;" src="<?php echo $oyuncu_resmi_4;?>" class="card-img" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body" style="margin-left:-85px;">
                <h5 style="font-weight:bold;color:#0084ff;" class="card-title"><?php echo $oyuncu_nick_4?></h5>
                <p class="card-text">Oyun Modu : <?php echo '<font color="red">'.$oyun_modu_4.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Aradığı Oyuncu Sayısı : <?php echo '<font color="red">'.$aranan_kisi_4.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Dc veya Ts3 :  <?php echo  '<a target="_blank" href='.'"'.$link_4.'"'.' style="color:#0084ff;">'.$link_4.'</a>';?></p>
                <p style="margin-top:-10px;" class="card-text">Diyor ki : <?php echo '<font color="red">'.$icerik_4.'</font>';?></p>
              </div>
            </div>
          </div>
        </div>
        
        
       <div class="card mb-3" style="height:182px;max-width:800px;margin-left:5px;margin-top:5px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img style="border-bottom-right-radius:0px;border-top-right-radius:0px;height:180px;width:180px;" src="<?php echo $oyuncu_resmi_3;?>" class="card-img" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body" style="margin-left:-85px;">
                <h5 style="font-weight:bold;color:#0084ff;" class="card-title"><?php echo $oyuncu_nick_3?></h5>
                <p class="card-text">Oyun Modu : <?php echo '<font color="red">'.$oyun_modu_3.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Aradığı Oyuncu Sayısı : <?php echo '<font color="red">'.$aranan_kisi_3.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Dc veya Ts3 :  <?php echo  '<a target="_blank" href='.'"'.$link_3.'"'.' style="color:#0084ff;">'.$link_3.'</a>';?></p>
                <p style="margin-top:-10px;" class="card-text">Diyor ki : <?php echo '<font color="red">'.$icerik_3.'</font>';?></p>
              </div>
            </div>
          </div>
        </div>
        
          <div class="card mb-3" style="height:182px;max-width:800px;margin-left:5px;margin-top:5px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img style="border-bottom-right-radius:0px;border-top-right-radius:0px;height:180px;width:180px;" src="<?php echo $oyuncu_resmi_2;?>" class="card-img" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body" style="margin-left:-85px;">
                <h5 style="font-weight:bold;color:#0084ff;" class="card-title"><?php echo $oyuncu_nick_2?></h5>
                <p class="card-text">Oyun Modu : <?php echo '<font color="red">'.$oyun_modu_2.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Aradığı Oyuncu Sayısı : <?php echo '<font color="red">'.$aranan_kisi_2.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Dc veya Ts3 :  <?php echo  '<a target="_blank" href='.'"'.$link_2.'"'.' style="color:#0084ff;">'.$link_2.'</a>';?></p>
                <p style="margin-top:-10px;" class="card-text">Diyor ki : <?php echo '<font color="red">'.$icerik_2.'</font>';?></p>
              </div>
            </div>
          </div>
        </div>
        
          <div class="card mb-3" style="height:182px;max-width:800px;margin-left:5px;margin-top:5px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img style="border-bottom-right-radius:0px;border-top-right-radius:0px;height:180px;width:180px;" src="<?php echo $oyuncu_resmi_1;?>" class="card-img" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body" style="margin-left:-85px;">
                <h5 style="font-weight:bold;color:#0084ff;" class="card-title"><?php echo $oyuncu_nick_1?></h5>
                <p class="card-text">Oyun Modu : <?php echo '<font color="red">'.$oyun_modu_1.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Aradığı Oyuncu Sayısı : <?php echo '<font color="red">'.$aranan_kisi_1.'</font>';?></p>
                <p style="margin-top:-10px;" class="card-text">Dc veya Ts3 :  <?php echo  '<a target="_blank" href='.'"'.$link_1.'"'.' style="color:#0084ff;">'.$link_1.'</a>';?></p>
                <p style="margin-top:-10px;" class="card-text">Diyor ki : <?php echo '<font color="red">'.$icerik_1.'</font>';?></p>
              </div>
            </div>
          </div>
        </div>
        
        
        
       
    </body>
    
    <?php
}else{
    header("Location: lolquery.codingtr.com");
}  
    
    ?>
    
</html>