<?php
include "baglan.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){


   $user_id = $_POST['user_id'];
   $user_photo = $_POST['user_photo'];

  $randomPic = rand(700000,70000000);    
  $path = $user_id ."-". $randomPic.".png";
  $finalPath = "../img/".$path;
    

  $sql = "UPDATE users SET user_photo = '$user_id-$randomPic.png' WHERE user_id= '$user_id'";

  if(mysqli_query($baglan, $sql)){
      
      $content = base64_decode($user_photo);
      
    if(file_put_contents($finalPath, $content)){
      $result['success'] = 1;
      $result['message'] = "success";

      echo json_encode($result);
      mysqli_close($baglan);
    } 
    
    else {$result['success'] = 0;
      $result['message'] = "Resim Yukleme Basarisiz";

      echo json_encode($result);
      mysqli_close($baglan);}
  }
  
}

 ?>
