<?php
include 'Ayarlar/db_baglan.php';
session_start();
header('Content-Type: text/html; charset=utf-8');
$dizin = 'img/';
$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
$category = $_POST["category"];
$writer = $_SESSION["admin_mail"];
$file = basename($_FILES['dosya']['name']);
$title = addslashes($_POST["title"]);
$summary = addslashes($_POST["summary"]);
$content = addslashes($_POST["content"]);
$link = md5($title);



if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
{
    $sorgu = "INSERT INTO news (yazan,baslik,yazi,kategori,ozet,foto,link) VALUES ('$writer','$title','$content','$category','$summary','$file','$link') ";

                          $sorgu_yap = mysqli_query($baglan, $sorgu);
                          
                          if($sorgu_yap){
                              header("Location: http://lolquery.codingtr.com/webservice/news.php");
                          }else{
                              echo mysqli_error($baglan);
                          }
                          

 
} else {
    echo "Dosya yüklenemedi!\n";
}
?>
