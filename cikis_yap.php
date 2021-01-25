<?php

include 'Ayarlar/db_baglan.php';


session_start();
$kullanici_id = $_SESSION["user_id"];
 $online_sorgu = "UPDATE users SET user_durum = 0 WHERE user_id = '$kullanici_id' ";
     mysqli_query($baglan, $online_sorgu);
$_SESSION = array();
session_destroy();
   

header("Location: index.php");

?>
