<?php
include "baglan.php";

if(isset($_POST['user_id'])
  && isset($_POST['user_email'])
  && isset($_POST['user_password'])
  && isset($_POST['user_fullname'])
  && isset($_POST['user_phone'])
  && isset($_POST['user_gender'])){
  
    
    $user_id = $_POST['user_id'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_fullname = $_POST['user_fullname'];
    $user_phone = $_POST['user_phone'];
    $user_gender = $_POST['user_gender'];

    if(!$baglan){
      die("Hatali baglanti" . mysql_connect_error());
    }

    $sqlsorgu = "UPDATE users SET 
    user_email= '$user_email',
    user_password= '$user_password',
    user_fullname= '$user_fullname',
    user_phone= '$user_phone',
    user_gender= '$user_gender' WHERE user_id ='$user_id'";

    if(mysqli_query($baglan, $sqlsorgu)){
    $response["success"] = 1;
    $response["message"] = "successfully";
    echo json_encode($response);
  }else {
    $response["success"] = 0;
    $response["message"] = "No Product Found";
    echo json_encode($response);
  }
  mysqli_close($baglan);
}
else {
  $response["success"] = 0;
  $response["message"] = "Required fields is missing";
  echo json_encode($response);
  
}
 ?>
