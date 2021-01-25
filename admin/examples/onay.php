<?php 

include 'ayarlar/db_baglan.php';

$mail = @$_GET['mail'];

    $onay_sorgu = "UPDATE game_users SET onay = 1 where user_email = '$mail'";
    
    $sorgu_yap = mysqli_query($baglan, $onay_sorgu);
    
    if($sorgu_yap){
        echo "<script>window.close();</script>";
    }else {
        echo "Bir hata oluştu.";
    }




?>