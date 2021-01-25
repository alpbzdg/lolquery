<?php

if(isset($_POST['user_id'])){
  
  include "baglan.php";
  $user_id = $_POST['user_id'];

  $sql ="SELECT * FROM users WHERE user_id= '$user_id'";
    
  $response = mysqli_query($baglan, $sql);
  
  $result = array();
  $result['read'] = array();

  if(mysqli_num_rows($response) > 0){
      
    $row = mysqli_fetch_assoc($response);
    
     $index['user_fullname'] = $row['user_fullname'];
     $index['user_email'] = $row['user_email'];
     $index['user_password'] = $row['user_password'];
     $index['user_phone'] = $row['user_phone'];
     $index['user_photo'] = $row['user_photo'];
     $index['user_gender'] = $row['user_gender'];

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
