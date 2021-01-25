<?php 

include "ayarlar/db_baglan.php";

$id = $_GET["id"];

        $sorgu = "DELETE FROM news WHERE id = '$id'";
        
        
            if(mysqli_query($baglan,$sorgu)){
                header("Refresh:0.5; http://lolquery.codingtr.com/webservice/news.php");
            }else{
                echo "Dosya Silinemedi.";
                echo mysqli_error($baglan);
            }






?>