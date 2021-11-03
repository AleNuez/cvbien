<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="styles/style.css">
        <title>CV Bien | Curriculums fáciles</title>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries-->
        <!--if lt IE 9
        script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
        script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') -->
        <link
            href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css"
            rel="stylesheet"
            type="text/css"/>
    </head>
    <body
        class="sidebar-mini fixed"
        style="background: linear-gradient(135deg, #172a74, #21a9af); background-color: #172a74;">
        <div class="wrapper">
 <!-- Navbar-->
 <header style="background-color:#" class="main-header hidden-print"><a style="background-color:#123b4f;font-family: fantasy;" class="logo" href="#">CVBien</a>
        <nav style="background-color:#123b4f" class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i>Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>



            <div class="header-blue" style="margin-left: 0px;">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Hero-->
                        <div class="container hero ">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                                    <h1>Bienvenido <?php echo $_SESSION['user_id'];  ?>!</h1>
                                    <p>Aqui podrás encontrar una copia de tu curriculum lista para descargar y enviar.
                                       
                                    </p>

                                    <button
                                        class="btn btn-warning btn-lg btn-block"
                                        type="button"
                                        data-toggle="modal"
                                        data-target="#exampleModal">
                                        Descargar CV
                                    </button>

                                </div>
                                <div
                                    class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                                    <div class="iphone-mockup"><img src="assets/avatar.png" class="device">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hero-->



                            <!-- <div class="card"> <div class="card-body">Load Your Data Here</div> </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Javascripts-->
            <script src="js/jquery-2.1.4.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/plugins/pace.min.js"></script>
            <script src="js/main.js"></script>
            <script src="scripts/script.js"></script>
            <script src="scripts/smartwizard.js"></script>

        </body>
    </html>