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

            $like_sil = "DELETE FROM post_likes WHERE post_id = '$post_id' AND who_liked = '$kmail' ";
                
                if(mysqli_query($baglan,$like_sil)){
                    header("Location: http://lolquery.codingtr.com/SosyalMedya/index.php");
                }else{
                    header("Location: hata.php");
                }


mysqli_close($baglan);



?>