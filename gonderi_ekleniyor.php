   <?php 
        
           include "Ayarlar/db_baglan.php";
        session_start();
            $rastgele = rand(7000,700000);
        
            header('Content-Type: text/html; charset=utf-8');
            
            $dizin = 'img/';
            $yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
            $file = basename($_FILES['dosya']['name']);
            $gonderi = $_POST['gonderi-yazi'];
            $link = md5($rastgele);
            $user_mail = $_SESSION["user_email"];


if($file == ""){
    
     $sorgu = "INSERT INTO paylasimlar (paylasim_yazi,paylasim_yapan,paylasim_foto,paylasim_link) VALUES ('$gonderi', '$user_mail', 'NULL' , '$link') ";

                          $sorgu_yap = mysqli_query($baglan, $sorgu);
                          
                          if($sorgu_yap){
                             
                             header("Refresh:0.1; http://lolquery.codingtr.com/SosyalMedya/index.php");
                             
                          }else{
                              echo mysqli_error($baglan);
                          }
    
    
}else{



if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
{
    $sorgu = "INSERT INTO paylasimlar (paylasim_yazi,paylasim_yapan,paylasim_foto,paylasim_link) VALUES ('$gonderi', '$user_mail', '$file' , '$link') ";

                          $sorgu_yap = mysqli_query($baglan, $sorgu);
                          
                          if($sorgu_yap){
                             
                             header("Refresh:0.1; http://lolquery.codingtr.com/SosyalMedya/index.php");
                             
                          }else{
                              echo mysqli_error($baglan);
                          }
                          

 
} else {
  
}
}
?>