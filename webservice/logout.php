<?php

require_once __DIR__ . '/db_config.php';

if(isset($_POST['user_email'])){

  $user_email = $_POST['user_email'];

    $baglanti = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

    $sql = "SELECT * FROM users WHERE user_email='$user_email'";
    $response = mysqli_query($baglanti, $sql);

    if (mysqli_num_rows($response) == 1 ) {

      $online_sorgu = "UPDATE users SET user_durum = 0 WHERE user_email = '$user_email'";

        mysqli_query($baglanti, $online_sorgu);

            $result['success'] = "1";
            $result['message'] = "Basarili";
            echo json_encode($result);

            mysqli_close($conn);

        } else {

            $result['success'] = "0";
            $result['message'] = "Hata";
            echo json_encode($result);

            mysqli_close($conn);

        }

    }
    else {
            $result['success'] = "0";
            $result['message'] = "Hata";
            echo json_encode($result);
            mysqli_close($conn);

        }

?>
