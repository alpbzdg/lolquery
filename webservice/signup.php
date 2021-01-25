<?php
include "baglan.php";
if(isset($_POST['user_email'])
  && isset($_POST['user_password'])
  && isset($_POST['user_fullname'])){



    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_fullname = $_POST['user_fullname'];
    

    if(!$baglan){
      die("Hatali baglanti" . mysql_connect_error());
    }

    $sqlsorgu = "INSERT INTO users (user_email,
      user_password,
      user_fullname) VALUES
      ('$user_email',
       '$user_password',
       '$user_fullname')";

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
    header("Location: index.php");
  }
 ?>
