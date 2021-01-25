<?php 

include 'ayarlar/db_baglan.php';

$id = @$_GET['id'];

    $sil_sorgu = "DELETE FROM users WHERE user_id = '$id'";
    
    $sorgu_yap = mysqli_query($baglan, $sil_sorgu);
    
    if($sorgu_yap){
        echo "<script>window.close();</script>";
    }else {
        echo "Bir hata oluştu.";
    }




?>