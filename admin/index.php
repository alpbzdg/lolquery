<?php 

include 'examples/ayarlar/db_baglan.php';
session_start();



?>



<html>
    
    <head>
        
        <title>ADMİN GİRİŞİ</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    
    
    <body>
        
        
        <style>
            
            body{
                background:url("http://lolquery.codingtr.com/img/arkaplan2.jpg");
                background-repeat:no-repeat;
                background-size:100%;
            }
            
            .butonumuz{
                position:relative;
                left:45%;
                top:50%;
                width:123px;
                height:34px;
                background:url("http://lolquery.codingtr.com/img/butonpng.png");
                border:none;
                transition:1s;
            }
            
            .butonumuz:hover{
                background:url("http://lolquery.codingtr.com/img/butonhover.png");
                border:none;
                outline:none;
                transition:1s;
               
            }
            
            .butonumuz:focus{
                background:url("http://lolquery.codingtr.com/img/butonhover.png");
                border:none;
                outline:none;
                transition:1s;
               
            }
            
            
            
        </style>
        
        
        <?php 
    
    
    if($_POST){
        
        $mail = $_POST["mail"];
        $sifre = $_POST["sifre"];
        
        $giris_sorgu = "SELECT * FROM admins WHERE admin_mail = '$mail' AND  admin_password = '$sifre'";
        $sorgu_gerceklestir = mysqli_query($baglan,$giris_sorgu);
        $satir_say = mysqli_num_rows($sorgu_gerceklestir);
          
          if($satir_say > 0){

        $satir = mysqli_fetch_array($sorgu_gerceklestir);
        
        $_SESSION['admin_online'] = true;
        $_SESSION['admin_id'] = $satir['admin_id'];
        $_SESSION['admin_mail'] = $satir['admin_mail'];
        $_SESSION['admin_url'] = $satir['admin_url'];
      

        header("Location: index.php");

      }else {
        echo "<center><font color='red'>Böyle Bir Kullanıcı Bulunamadı</font></center>";
        header('refresh: 2');
      }
        
        
        
        
    }if(isset($_SESSION["admin_online"])){

      header("Location: examples/dashboard.php");
      //oturum acanlar burayı görecek.

    }else {

   
      
    ?>
    
    
    

<button type="button" class="btn btn-primary butonumuz" data-toggle="modal" data-target="#exampleModalCenter">
  Giriş Yap
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">LQS - Admin Panel Girişi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@LQS.com</span>
            </div>
                 <input name="mail" type="text" class="form-control" placeholder="E-Mail Adresiniz" aria-label="Username" aria-describedby="basic-addon1">
                 
            </div>
            
        <input name="sifre" type="password" class="form-control" placeholder="Şifreniz" aria-label="Password">
        <br>
        
        <span>Eğer hesabınız yok ise lütfen zor ile giriş yapmaya çalışmayınız. Log sistemi bulunmaktadır.</span>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
        
        </form>
        
      </div>
    </div>
  </div>
</div>
 
 
 <?php  
    }
  ?>      
        
    </body>
    
    
    
</html>

<?php 




?>