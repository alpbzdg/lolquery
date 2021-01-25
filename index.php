
<?php 

session_start();


?>

<html>
    <head>
        <title>Giriş Sayfasi</title>
         <title>ADMİN GİRİŞİ</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    </head>
    <body>
        <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>

<video autoplay muted loop id="myVideo">
  <source src="https://raw.communitydragon.org/latest/plugins/rcp-fe-lol-splash/global/default/splash-assets/seasonstart2019-c/video-splash-ss19-c.webm" type="video/webm">
  Your browser does not support HTML5 video.
</video>



<button style="position:absolute;top:50%;left:50%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Giriş Yap
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Siteye Giriş Paneli</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form style="" method="post">
          <center><font style="font-weight:bold;font-family:Arial;text-align:center;"> Kullanıcı Adı </font><br><br>
        <input type="text" style="text-align:center;" name="kadi" placeholder="Kullanici Adı"><br><br>
          <font style="font-weight:bold;font-family:Arial;"> Şifre </font><br> <br>
        <input type="password" name="sifre" style="text-align:center;" placeholder="Şifre">
        <br /><br />
       
        </center>
 
        <?php 
        
        $kadi =$_POST["kadi"];
        $sifre = $_POST["sifre"];
        
        if($_POST){
            
        
        if($kadi == "furkan" && $sifre =="159705Fu"){
            
            $_SESSION["admin"]= true;
            
            header("Location: http://lolquery.codingtr.com/login.php");
        }else if($kadi =="alp" && $sifre = "123456." ) {
            $_SESSION["admin"]= true;
            
            header("Location: http://lolquery.codingtr.com/login.php");
        }else {
            echo "<center><font color='red' style='font-family:Arial;font-weight:bold;'>Giriş Başarısız.</font></center>";
        }
        }
        
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
               </form>
      </div>
    </div>
  </div>
</div>



       
        
    </body>
    
   
   
</html>


