<?php 

session_start();
                 $sunucu = "185.50.71.32";
                            $sifre = "159705Fu";
                            $veritabani = "codingtr_lolquery";
                            $kullanici = "codingtr_furkan";
                
                            $baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);
                            
                            if($baglan){
                                
                            }else {
                                echo "DATABASE'E BAĞNALILAMIYOR";
                            }
                            
$post_id = $_GET["id"];
$kmail = $_SESSION["user_email"];

    $like_at = "INSERT INTO post_likes (post_id,who_liked,like_count) VALUES ('$post_id', '$kmail', '1')";
                
                if(mysqli_query($baglan,$like_at)){
                    header("Location: http://lolquery.codingtr.com/SosyalMedya/index.php");
                }else{
                    header("Location: hata.php");
                }


mysqli_close($baglan);


?>