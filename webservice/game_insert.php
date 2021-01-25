<?php

if(isset($_POST['user_email']) && isset($_POST['gamer_username']) && isset($_POST['gamer_server'])){
    
    include "baglan.php";
    
    $user_email = $_POST['user_email'];
    $gamer_username = $_POST['gamer_username'];
    $gamer_server = $_POST['gamer_server'];
    
    
    $userCheck = "SELECT * FROM game_users WHERE user_email= '$user_email'";
    $userCheckResult = mysqli_query($baglan, $userCheck);
    if(mysqli_num_rows($userCheckResult)>0){
       
       $response["success"] = 0;
       $response["message"] = "Kullanıcı Kaydı Var";
       echo json_encode($response);
       
    }else{
     
       $sqlsorgu = "INSERT INTO game_users (user_email, gamer_username, gamer_server) VALUES
       ('$user_email',
       '$gamer_username',
       '$gamer_server')";

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
    
    }else{
    $response["success"] = 0;
    $response["message"] = "Required fields is missing";
    echo json_encode($response);
  }
 ?>
