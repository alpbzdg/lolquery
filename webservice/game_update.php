<?php

if(isset($_POST['user_email']) && isset($_POST['gamer_username']) && isset($_POST['gamer_server']) && isset($_POST['onay'])){
    
    include "baglan.php";
    
    $user_email = $_POST['user_email'];
    $gamer_username = $_POST['gamer_username'];
    $gamer_server = $_POST['gamer_server'];
    $onay = $_POST['onay'];

    $sqlsorgu = "UPDATE game_users SET 
    gamer_username = '$gamer_username',
    gamer_server = '$gamer_server', onay= '$onay' WHERE user_email ='$user_email'";

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
  }else{
    $response["success"] = 0;
    $response["message"] = "Required fields is missing";
    echo json_encode($response);
  }
 ?>
