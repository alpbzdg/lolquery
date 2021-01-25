<?php 

session_start();


            //DATABASE BAGLANTISI
            
            
            $sunucu = "185.50.71.32";
            $sifre = "159705Fu";
            $veritabani = "codingtr_lolquery";
            $kullanici = "codingtr_furkan";

            $baglan = mysqli_connect($sunucu,$kullanici, $sifre, $veritabani);
            
            if($baglan){
                
            }else {
                echo "DATABASE'E BAĞNALILAMIYOR";
            }
            


            $foto_url= '/img/'.$_SESSION["user_photo"];
            $user_mail = $_SESSION["user_email"];
        if($_SESSION["online"]){
            

?>



<!DOCTYPE html>
    <html lang="en">
        <head>
             <title>LQS-SOSYAL MEDYA</title>
                 <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link href="https://fonts.googleapis.com/css?family=Cairo&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b63776f30f.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                          <style>    
                           *{
                               font-family:Cairo;
                           }
                           body{
                               background-image:url('http://lolquery.codingtr.com/img/arkaplan3.png');
                               background-size:100%;
                               background-attachment: fixed;
                               background-repeat:no-repeat;
                               cursor:url('http://raw.communitydragon.org/latest/game/assets/ux/cursors/hover_ally_precise.png'), auto;
                           }
                           ::-webkit-scrollbar {
                              width: 10px;
                            }
                            
                            /* Track */
                            ::-webkit-scrollbar-track {
                              background: #fff; 
                            }
                             
                            /* Handle */
                            ::-webkit-scrollbar-thumb {
                              background: #2f3640; 
                              border-bottom-right-radius:20px;
                              border-bottom-left-radius:20px;
                            }
                            
                            /* Handle on hover */
                            ::-webkit-scrollbar-thumb:hover {
                              background: #555; 
                            }
                           
                           #paylasim-gonder{
                               width:80px;
                               padding:5px;
                               border:1px solid #007bff;
                               background:none;
                               color:#007bff;
                               border-radius:2px;
                               transition:1s;
                           }
                           
                           #paylasim-gonder:hover{
                               border:1px solid #000;
                               color:#000;
                               transition:1s;
                           }
                           
                           
                           
                          </style>
            </head>
    <body>
    
<!--Navbar -->
<nav style="height:60px;background: rgba(0,0,0,0.1) !important;box-shadow: 2px 2px 6px rgba(0,0,0,.4)!important;" class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
  <a style="color:#2f3640;"  class="navbar-brand" href="#">LQS-SOSYAL MEDYA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="color:#2f3640;" class="nav-link" href="/sitemizxd.php">Siteye Dön <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a style="color:#2f3640;"  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Açılabilir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="color:#000;"  class="dropdown-item" href="#">Action</a>
          <a style="color:#000;"  class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a style="color:#000;"  class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
          
          <!-- MODAL SCRİPTİ !-->
          
         <script type="text/javascript">
                $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
            </script>
                
                
                <button id="yeni-gonderi" type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Yeni Gönderi</button>

                
                <div style="margin:0 auto;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yeni Gönderi Oluştur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       
        <form method="post" action="../gonderi_ekleniyor.php" enctype="multipart/form-data">
          
          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Gönderi</label>
            <textarea name="gonderi-yazi" class="form-control" id="message-text" placeholder="Bu gün nasıl geçti?"></textarea>
          </div>
          
          <input id="real-file" name="dosya" type="file" hidden="hidden">
          <button type="button" id="custom-button"><i class="fas fa-photo-video"></i> Resim Seç</button>
          <span id="custom-text">Dosya Seçilmedi.</span><br>
          
      </div>
      <div class="modal-footer">
        
        <button type="submit" id="paylasim-gonder" value="" ><i class="fas fa-share"></i>  Paylaş</button>
        </form>
      </div>
    </div>
  </div>
</div>
      </li>
    </ul>
  
  
      
            
            <script type="text/javascript">
                         
                         const realFileBtn = document.getElementById("real-file");
                         
                         const customBtn = document.getElementById("custom-button");
                         
                         const customTxt = document.getElementById("custom-text");
                         
                         customBtn.addEventListener("click", function(){
                             realFileBtn.click();
                             
                         });
                         
                         realFileBtn.addEventListener("change", function(){
                            
                            if(realFileBtn.value){
                                customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                            }else{
                                customTxt.innerHtml = "Dosya Seçilmedi.";
                            }
                             
                         });
                         
                         
                         
                     </script>
            
     
  
         <style>
             
             #custom-button{
                 color:#007bff;
                 background:none;
                 padding:5px;
                 border:1px solid #007bff;
                 border-radius:2px;
                 transition:1s;
             }
             
             #custom-button:hover{
                 color:#000;
                 background:none;
                 padding:5px;
                 border:1px solid #000;
                 border-radius:2px;
                 transition:1s;
             }
         
             #bildirim{
                 position:relative;
                 left:-10px;
                 top:10px;
             }
             
             
             
             
         </style>

       <ul class="navbar-nav">
           
           <!-- YARDIM BUTON-->
           
           <button id="yardim-buton" style="position:relative;left:-40px;margin-top:14px;" type="button" class="btn btn-primary btn-info" data-toggle="modal" data-target="#exampleModalLong">
  Yardım
</button>

<!-- YARDIM İÇERİK -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bu Sitede Ne Yapabilirim?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <script>
          $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
      </script>
      
      
     
        
      
      <div class="modal-body">
        <h5>LQS - SOSYAL MEDYA SİTESİNE HOŞ GELDİNİZ.</h5>
        
        LQS nedir?  <br>
        
        LQS , Başkent Üniversitesinden mezun olmuş iki Bilgisayar Programcısı tarafından geliştirilmiş bir sorgu , duo ve turnuva sistemidir.<br>
        
        -------------------------------------------------------------------- <br>
        
        Kullanıcının verimli bir tecrübe elde etmesi için sizlere yapmanız gereken şeyleri sıraladık! <br>
        
        <ul class="list-group">
            <li class="list-group-item list-group-item-action list-group-item-light">Oynadığınız maçların ss'lerini alıp atın,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Önemli pozisyonlarınızı oyun tekrarından kaydedip burada bizlerle paylaşın,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Kendinize arkadaş ortamı bulun,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Sizleri güldüren veya sizin daha iyi oynamanıza yardımcı olan sayfaları takip edin,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Turnuvalarımıza katılın, ödüller kazanın ve isminizi sitemizin turnuva kazananlar bölümüne yazdırın,</li>
            <li class="list-group-item list-group-item-action list-group-item-light">Oynayacak arkadaşınız yok mu? Aynı kümeden düzgün oyuncu mu arıyorsunuz? <a href="http://lolquery.codingtr.com/duo_bul.php" data-toggle="tooltip" class="tooltip-test" title="Duo Bulma sistemi sizler için geliştirilmiş bir algoritmadır. Sizlere en iyi oyuncuyu bulur ve iletişim kurmanıza yardımcı olur.">Duo Bulma</a> algoritmamızı deneyin ve bize geri dönüş yapın,</li>
            <li class="list-group-item list-group-item-action list-group-item-light"><a href="http://lolquery.codingtr.com/duo_bul.php" class="tooltip-test" data-toggle="tooltip" title="Maça +1 Özelliği, 3 kişi veya 4 kişiyseniz ve full takım olarak oynamak istiyorsanız seçmeniz gereken özelliktir.">Maça +1</a> Özelliğini kullanarak tam bir takım şeklinde oyun oynayın,</li>
            <li class="list-group-item list-group-item-action list-group-item-primary">Kim bilir belki bir gün E-Spor camiasına isminizi yazdırırsınız, biz de aracı oluruz!</li>
            
        </ul>
        -------------------------------------------------------------------- <br>
        Herkese iyi oyunlar!
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ANLADIM !</button>
      </div>
    </div>
  </div>
</div>
           <li class="nav-item dropdown" id="bildirim">
        <a style="color:#fff;"  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a style="color:#000;"  class="dropdown-item" href="#">Bildirim Yok !</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
           
           
           
        <li class="nav-item dropdown" style="position:relative;left:-10px;">
        <a class="nav-link dropdown-toggle" style="margin-right:50px;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img style="height: 50px;margin-left: 15px;box-shadow: 2px 2px 6px rgba(0,0,0,.4)!important;border-radius: 50% !important;" src="<?php echo $foto_url;?>" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="#">Ayarlar</a>
          <a class="dropdown-item" href="../cikis_yap.php">Çıkış Yap</a>
        </div>
      </li>   
    </ul>
    
  </div>
</nav>





<style>
    
    #yeni-gonderi{
    position: absolute;
    margin-top: 0px;
    background:#2f3640;
    border:1px solid #2f3640;
    margin-left: 10px;
        transition:1s;
    }
    
    #yeni-gonderi:hover{
        background:#fff;
        border:1px solid #2f3640;
        color:#2f3640;
        transition:1s;
    }
    
    #yardim-buton{
        background:#2f3640;
        border:1px solid #2f3640;
        color:#fff;
        transition:1s;
    }
    
    #yardim-buton:hover{
        background:#fff;
        border:1px solid #2f3640;
        color:#2f3640;
        transition:1s;
    }
    
    
    .btn-primary{
            height: 38px;
    margin-top: 6px;
    }
    
    .icerik div{
        float:left;
    }
    
    .icerik{
        margin:0 auto;
        height:500px;
        width:1020px;
    }
    
    .sol-taraf{
        overflow:auto;
        position:sticky;
        height:1000px;
        width:200px;
        background:none;
        top:0;
    }
    
    .orta-taraf{
        margin-top:8px;
        width:500px;
        height:500px;
        margin-left:10px;
        
    }
    
    .orta-taraf{
        width:800px;
        height:1000px;
        background:none;
    }
    
    #uc-nokta{
        background:none;
        float:right;
    }
    
    #uc-nokta i{
        color:#616770;
        transition:1s;
    }
    
    #uc-nokta i:hover{
        color:#000;
        cursor:pointer;
        transition:1s;
    }
    
    
    #uc-nokta i:after{
        content:none;
    }
    
    #etkilesim a{
        color:#606770;
        text-decoration:none;
        margin-left:40px;
    }
    
    #etkilesim a:hover{
        color:#007bff;
        transition:1s;
    }
.sidenav {
  width: 200px;
  height:500px;
  position: fixed;
  z-index: 1;
 border-right: 1px solid rgba(0,0,0,.125);
  background: none;
  overflow-x: hidden;
  padding: 8px 0;
}
    
    .liste img{
        height:40px;
        width:40px;
        border-radius:50% !important;
        box-shadow: 2px 2px 6px rgba(0,0,0,.4)!important;
    }
    
    .liste a{
        display:block;
        text-decoration:none;
        border-bottom-left-radius:200px;
        border-top-left-radius:200px;
    }
    
    .liste a span{
        position:relative;
        left:5px;
        font-size:10pt;
    }
    
    .liste a:hover + .liste{
        box-shadow: 2px 2px 6px rgba(0,0,0,.4);
    }
    
    .liste{
        width:190px;
        border-bottom-left-radius:200px;
        border-top-left-radius:200px;
        background:none;
    }
    
    .liste a:hover {
        color:#000;
        box-shadow: 2px 2px 6px rgba(0,0,0,.4);
        -webkit-transition:All 0.2s ease;
    }
    
    .cizgi{
        width:190px;
        height:1px;
        background-color:rgba(0,0,0,0.125);
    }
    
    .sampiyon span{
       position: relative;
       left: 20px;
       top: 2px;
    }
    
    .sampiyon img{
        cursor:help;
    }
    
    #olaylar{
        position:relative;
        top:-20px;
        color:#696f77;
        font-weight:bold;
        cursor:context-menu;
    }
    
    #takvim-link{
        display:block;
        text-decoration:none;
        width:190px;
        padding:3px;
        -webkit-transition:All 0.2s ease;
    }
    
    #takvim-link:hover{
        color:#000;
        box-shadow: 2px 2px 6px rgba(0,0,0,.4);
        -webkit-transition:All 0.2s ease;
    }
    
    #takvim-link span{
        position:relative;
        left:8px;
        top:1px;
    }
    
    #duo-bul-link{
        display:block;
        text-decoration:none;
        width:190px;
        padding:3px;
        -webkit-transition:All 0.2s ease;
    }
    
    #duo-bul-link:hover{
         color:#000;
        box-shadow: 2px 2px 6px rgba(0,0,0,.4);
        -webkit-transition:All 0.2s ease;
    }
    
    #duo-bul-link span{
        position:relative;
        left:8px;
        top:1px;
    }
    
    #maca-bir-link {
         display:block;
        text-decoration:none;
        width:190px;
        padding:3px;
        -webkit-transition:All 0.2s ease;
    }
    
    #maca-bir-link:hover{
        color:#000;
        box-shadow: 2px 2px 6px rgba(0,0,0,.4);
        -webkit-transition:All 0.2s ease;
    }
    
    #maca-bir-link span{
        position:relative;
        left:8px;
        top:1px;
    }
    
    
    #likelar{
        
    position: relative;
    height: 20px;
    width: 20px;
    display: block;
    text-align: center;
    background: #007bff;
    color: #fff;
    border-radius: 50%;
    top: 20px;
    left:10px;
    cursor:help;
    }
    
    #likelar i{
        position:relative;
        top:-4px;
    }
    
    #post-like-count{
        position:relative;
        top:-4px;
        left:40px;
        font-size:10pt;
        color:rgb(96,103,112);
        font-weight:bold;
        cursor:normal;
    }
    
    #etkilesim a:hover{
        background:none;
        border:none;
        cursor:pointer;
    }
    
    
</style>
    <br>
    
    <script>
        
        
        
    </script>
    
        <br>


    <div class="icerik">
        
        <div class="sol-taraf">
            
            <div class="sidenav">
                 
                    <div class="liste"><a href=""><img src="<?php echo $foto_url;?>" /><span><?php echo $_SESSION["user_fullname"]?></span></a></div>
                    <br>
                    <br>
                    <div class="cizgi"></div>
                    <br>
                    <div class="sampiyon"><img class="tooltip-test" data-toggle="tooltip" title="Şampiyon" src="http://ddragon.leagueoflegends.com/cdn/5.5.1/img/ui/champion.png"/> <span><?php echo $_SESSION["gamer_username"]?></span></div>
                    <br>
                    <br>
                    <div class="cizgi"></div>
                    <br>
                    <span id="olaylar">Olaylar</span>
                    <br>
                    <div class="takvim"><a id="takvim-link" href=""><i style="color:red;margin-left:3px;" class="far fa-calendar-alt"></i> <span>Turnuva Takvimi</span><span style="margin-left:5px;" class="badge badge-success">Yeni</span></a></div>
                    <br>
                    <div class="duo-bul"><a id="duo-bul-link" href=""><i style="color:red;" class="fas fa-user-friends"></i><span>Duo Bul</span></a></div>
                    <br>
                    <div class="maca-bir"><a id="maca-bir-link" href=""><i style="color:red;"  class="fas fa-users"></i><span>Maça +1</span></a></div>
                    
                    
                    
                    
                </div>
            
            
        </div>
    
        <div class="orta-taraf">
            
        <ul class="list-group list-group-flush">
        <li class="list-group-item" style="background:none;">Son Gönderiler</li>       
        </ul>
           
           <br>
         
             <?php 
            
            
            
                $sorgu = "SELECT * FROM paylasimlar ORDER BY paylasim_id DESC";
                
                $paylasim_bul = mysqli_query($baglan, $sorgu);
                
                    while( $paylasim_goster = mysqli_fetch_array($paylasim_bul) )
                    
                    {
                        
                    $paylasim_yapan = $paylasim_goster["paylasim_yapan"];
                    
                   
                    
                    $paylasim_foto = '/img/'.$paylasim_goster["paylasim_foto"];
                    $paylasim_link = $paylasim_goster["paylasim_link"];
                    $paylasim_id = $paylasim_goster["paylasim_id"];
                    $paylasim_yazi = $paylasim_goster["paylasim_yazi"];
                    
                                
                                $like_sorgusu = "SELECT * FROM post_likes WHERE post_id = '$paylasim_id' AND who_liked = '$user_mail'";
                                
                                $like_liste = mysqli_fetch_array(mysqli_query($baglan,$like_sorgusu));    
                                        
                                        $kim_like = $like_liste["who_liked"];
                                        $like_post = $like_liste["post_id"];
                                        
                                     
                                    
                        
                            $kisi_sorgu = "SELECT * from users WHERE user_email = '$paylasim_yapan'";
                                    
                                $kisi_goster = mysqli_fetch_array(mysqli_query($baglan,$kisi_sorgu));
                                            
                                            $kisi_isim = $kisi_goster["user_fullname"];
                                            $kisi_foto = '/img/'.$kisi_goster["user_photo"];
                                        
                              $sorgu = "SELECT post_id from post_likes WHERE post_id = '$paylasim_id'";
        
                                 mysqli_query($baglan,$sorgu);
             
           
                                 $begeni_sayisi = mysqli_num_rows(mysqli_query($baglan,$sorgu));
            
        
                                    
                
                echo '<div style="width: 800px;margin-bottom:10px;" class="card">
                 <div  class="card-header">
                     
                     <div id="uc-nokta" class="dropdown">
                      
                        <i style="background:none;border:none;" class="fas fa-ellipsis-h dropdown-toggle" data-toggle="dropdown"></i>
                      
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Kişiyi Engelle</a>
                        <a class="dropdown-item" href="#">Gönderiyi Düzenle</a>
                        <a class="dropdown-item" href="#">Gönderiyi Sil</a>
                      </div>
                    </div>                   
                     
                     <img style="height: 50px;box-shadow: 2px 2px 6px rgba(0,0,0,.4)!important;border-radius: 50% !important;" src="'.$kisi_foto.'" />
                     <a style="position:relative;left:10px;top:-10px;" href=""><span>'.$kisi_isim.'</span></a>
                </div>
            <div id="gorsellervepaylasim" class="card-body">
                
               <p class="card-text">'.$paylasim_yazi.'</p>';
               
                if(!($paylasim_goster["paylasim_foto"] == "NULL")){
                    
                    echo '    
                        <button style="border:none;outline:none;background:none;" data-toggle="modal" data-target="#exampleModalCenter">
                        <img id="fotopaylasim" style="margin-left:-7px" height="400px" src="'.$paylasim_foto.'" class="rounded float-left" alt="...">
                        </button>
                        
                        <br>';
                    
                        }else{
                             echo " ";
                        }
           
           
                echo ' <span id="likelar"><i data-toggle="tooltip" title="Beğeni Sayısı" class="far fa-thumbs-up fa-sm tooltip-test"></i></span><span id="post-like-count">'.$begeni_sayisi.'</span>
                       
                        <br>
                        <!-- AÇILAN PENCERE -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          
                          
                          <div class="modal-dialog modal-dialog-centered" role="document">
                                 
                           <div style="background:none;border:none;margin-left:350px;" class="modal-content">
                              <div style="border:none;" class="modal-header">
                                  
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                              </div>
                              
                           
                              
                              <div style="background:none;border:none;" class="modal-body">
                                  
                                 <img src="'.$paylasim_foto.'" class="rounded float-left" /><br>
                                 
                                
                                 
                                 
                              </div>
                              <div style="border:none;" class="modal-footer">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        
                        
                                <div style="width: 798px;margin-left: -20px;margin-top:10px;" id="etkilesim" class="card-footer text-muted">'; 
                              
                              
                              if($kim_like == $user_mail && $like_post == $paylasim_id){
                                  
                                  echo '<a style="position:relative;top:12px;left:-30px;border:none;background:none;color:#ff7979;" href="begenme.php?id='.$paylasim_id.'"><i class="fas fa-thumbs-up"></i> Beğenmekten Vazgeç</a>';
                              }else {
                                  echo '<a style="position:relative;top:12px;left:-30px;border:none;background:none;" href="begen.php?id='.$paylasim_id.'"><i class="fas fa-thumbs-up"></i> Beğen</a>';
                              }
                              
                              
                     echo'   
                             <a style="position:relative;top:12px;left:-30px;" href=""><i class="fas fa-comment"></i> Yorum Yap</a>
                             <a style="position:relative;top:12px;left:-30px" href=""><i class="fas fa-share"></i> Paylaş</a>
                        
                        
                        </div>
                 </div>
            </div>';
           
                                    
                
                        
                     
     }
                            
                            
           
           ?>
             
                       
                      
        
         
            
                                        
                                 
            
       
            
            
        </div>            
        
       
    
          
        
    </div>











</body>
</html>



<?php 



}else{
        header("Location: /login.php");
}


?>
