<?php

if(isset($_POST['user_email'])){
  
  include "baglan.php";
  $user_email = $_POST['user_email'];

  $sql ="SELECT * FROM game_users WHERE user_email= '$user_email'";
    
  $response = mysqli_query($baglan, $sql);
  
  $result = array();
  $result['read'] = array();

  if(mysqli_num_rows($response) > 0){
      
    $row = mysqli_fetch_assoc($response);
    
     $index['gamer_username']= $row["gamer_username"];
     $index['gamer_server'] = $row["gamer_server"];
     $index['onay'] = $row["onay"];
     
      array_push($result["read"], $index);
    
      $result['success'] = "1";
      $result['message'] = "Basarili";
      
      echo json_encode($result);
      
      mysqli_close($baglan);
  }
 
}else{
    
  $result["success"] = "0";
  $result["message"] = "Error!";
  echo json_encode($result);
  mysqli_close($baglan);
  
}

 ?>
