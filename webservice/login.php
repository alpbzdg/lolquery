<?php

if(isset($_POST['user_email']) && isset($_POST['user_password'])){

  include "baglan.php";

  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
  
  
    $sql = "SELECT * FROM users WHERE user_email='$user_email'";

    $response = mysqli_query($baglan, $sql);

    $result = array();
    $result['login'] = array();
    
    if ( mysqli_num_rows($response) == 1 ) {
        
        $row = mysqli_fetch_assoc($response);
        $sqltwo = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
        $response = mysqli_query($baglan, $sqltwo);
        $request = mysqli_num_rows($response);
        
        $online_sorgu = "UPDATE users SET user_durum = 1 WHERE user_email = '$user_email' ";
        mysqli_query($baglan, $online_sorgu);
        
        if($request > 0){

            $index['user_fullname'] = $row['user_fullname'];
            $index['user_email'] = $row['user_email'];
            $index['user_id'] = $row['user_id'];
            
            array_push($result['login'], $index);
            
            $result['success'] = "1";
            $result['message'] = "Basarili";
            echo json_encode($result);
            
            mysqli_close($baglan);
            
        } else {

            $result['success'] = "0";
            $result['message'] = "Hata";
            echo json_encode($result);

            mysqli_close($baglan);

        }
        
    }
    else {
            $result['success'] = "0";
            $result['message'] = "Hata";
            echo json_encode($result);
            mysqli_close($baglan);
            
        }
}
?>