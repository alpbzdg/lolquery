<?php 

include 'ayarlar/db_baglan.php';
session_start();

    if($_SESSION["admin_online"]){








?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://lolquery.codingtr.com/img/favicon.png">
  <title>
    LQS Admin Panel
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            LQS
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Kaput Team
          </a>
        </div>
      <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Grafikler</p>
            </a>
          </li>
          <li>
            <a href="./uyeler_listesi.php">
              <i class="tim-icons icon-atom"></i>
              <p>Üyeler Listesi</p>
            </a>
          </li>
          <li>
            <a href="./uye_onay.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Üye Onay Listesi</p>
            </a>
          </li>
           <li>
            <a href="./uye_onayli.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Onaylı Üye Listesi</p>
            </a>
          </li>
          <li>
            <a href="./haberler.php">
              <i class="tim-icons icon-bell-55"></i>
              <p>Haber Listesi</p>
            </a>
          </li>
          <li>
            <a href="./haber_ekle.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Haber Ekle</p>
            </a>
          </li>
          <li>
            <a href="./online_kullanicilar.php">
              <i class="tim-icons icon-align-center"></i>
              <p>Online Kullanıcılar</p>
            </a>
          </li>
          <li>
            <a href="./rtl.php">
              <i class="tim-icons icon-world"></i>
              <p>Admin Listesi</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">LQS ADMİN PANELİ</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li>
                  
                    <span class="text-center" style="position:absolute;margin-left:-300px;margin-top:15px;"><?php echo $_SESSION["admin_mail"];?></span> 
                  
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="<?php echo '../assets/img/'.$_SESSION["admin_url"];?>" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      
      
      
      
  <!-- KENDİ KODUMUZ -->    
  
  
  
  <div class="content">
        <div class="row">
            <div style="left:16px;width:683px;" class="alert alert-success">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span>
                    <b> MUTLAKA OKUYUNUZ. - </b> KULLANICI ONAYLADIKTAN SONRA LÜTFEN SAYFAYI YENİLEYİNİZ.</span>
                </div>
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Onaylanan Oyuncular</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                       
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          İkon
                        </th>
                        <th>
                          Oyuncu Nick
                        </th>
                        <th>
                          Level
                        </th>
                        <th>
                          Lig
                        </th>
                        <th>
                          Mail
                        </th>
                        <th style="position:absolute;margin-left:10px;">
                          Server
                        </th>
                        <th class="text-center">
                          Onaylı
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        
                         <?php 
                         
                         
                         $sorgu = "SELECT * FROM game_users WHERE onay = 1";
                            
                            
                         $uye_bul = mysqli_query($baglan, $sorgu);    
                            $say = 1;
                            
                            while($oyuncu_goster=mysqli_fetch_array($uye_bul)){
                                
                    
                         $bilgi_url = "https://".$oyuncu_goster['gamer_server'].".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$oyuncu_goster['gamer_username']."?api_key=".$api_key;
                        
                        
                         $oyuncu_bilgi = file_get_contents($bilgi_url);
                         $bilgi_bul = json_decode($oyuncu_bilgi, true);
      
      
                       
                         $karakter_level =$bilgi_bul['summonerLevel'];  
      
      
                         $oyuncu_resmi = "http://ddragon.leagueoflegends.com/cdn/9.13.1/img/profileicon/".$bilgi_bul["profileIconId"].".png";
                         
                         $lig_url = "https://".$oyuncu_goster['gamer_server'].".api.riotgames.com/lol/league/v4/entries/by-summoner/".$bilgi_bul['id']."?api_key=".$api_key;
  
                         $lig_bilgi=file_get_contents($lig_url);
                         $lig_bilgi_bul = json_decode($lig_bilgi, true);
    
                         $kume = $lig_bilgi_bul[0]['tier'];
                         $kume_sayi = $lig_bilgi_bul[0]['rank'];
    
                         
    
                        if($kume == 'IRON'){
                        $kume = 'DEMİR';
                        }else if($kume == 'BRONZE'){
                        $kume = 'BRONZ';
                        }else if($kume == 'GOLD'){
                        $kume = 'ALTIN'.' '.$kume_sayi;
                        }else if($kume == 'PLATINUM'){
                        $kume = 'PLATİN'.' '.$kume_sayi;
                        }else if($kume == 'DIAMOND'){
                        $kume = 'ELMAS'.' '.$kume_sayi;
                        }else if($kume == 'MASTER'){
                        $kume = 'USTALIK'.' '.$kume_sayi;
                        }else if($kume == 'GRANDMASTER'){
                        $kume= 'ÜSTATLIK'.' '.$kume_sayi;
                        }else if($kume == 'CHALLENGER') {
                        $kume = 'ŞAMPİYONLUK'.' '.$kume_sayi;
                }else{
                    $kume = 'LİG YOK';
            }
    ?>
                        
                        
                        
                        
                      <tr>
                        <td>
                          <?php echo $say;?>
                        </td>
                        <td>
                          <img style="height:50px;border-radius:50%;" src="<?php echo $oyuncu_resmi;?>" />
                        </td>
                        <td>
                          <?php echo $oyuncu_goster["gamer_username"]; ?>
                        </td>
                        <td>
                          <?php echo $karakter_level;?>
                        </td>
                        <td>
                          <?php echo $kume; ?>
                        </td>
                        <td>
                          <?php echo $oyuncu_goster["user_email"];?>
                        </td>
                        <td class="text-center">
                          <?php echo $oyuncu_goster["gamer_server"];?>
                        </td>
                        
                        <td class="text-center">
                          <i title="ONAYLI" style="color:green;" class='far fa-check-circle fa-2x'></i>
                        </td>
                        
                      </tr>
                      
                      <?php 
                    $say++;
              
                       
                            }
                      ?>
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-user-plus fa-3x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> BİRŞEYLER EKLEYECEĞİZ.</li>
        <br>
        <br>
        <hr color="#3d3f51">
       
        
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>


<?php 


   }else {
        header("Location: http://lolquery.codingtr.com/admin/");
    }



?>

