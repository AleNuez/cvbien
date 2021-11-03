<?php

// Creo una marca de logueo una vez enviado el formulario, si se envia, va a login, sino se queda acá.
session_start();

// Este es un archivo de conexión aparte, solo para el login.
require_once "connection.php";


if (!empty($_POST['user']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT * FROM usuarios WHERE userid = :usuario');
  $records->bindParam(':usuario', $_POST['user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  
 

  // $message = 'C';

if(isset($results)) {

  if (count($results) > 0 && $_POST['password'] == $results['password']) {
    $_SESSION['user_id'] = $results['userid'];
    $_SESSION['logged'] = "ok";
    // $_SESSION['user_name'] = $results['userName'];
    // $_SESSION['user_lastname'] = $results['employeeLastname'];
    // $_SESSION['rol'] = $results['rolId'];
    // echo "Usuario encontrado = ";
    // echo $results['employeeLastname'];
      header("Location: profile.php");
  } else {
    echo '<script language="javascript">';
echo 'alert("Usuario o contraseña inválidos")';
echo '</script>';
    unset($_SESSION['logged']);
    session_destroy();
  }
} else {
  exit;
}

}

// if(isset($_POST['submit'])){

//   // header('location:../index.php');
// }else {




?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <title>CVBien | Recuperar Contraseña</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body style="background: linear-gradient(135deg, #172a74, #21a9af); background-color: #172a74;">
    <section class="material-half-bg">
      <div class="cover " style="background: rgb(2,0,36); background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(44,44,122,1) 49%, rgba(86,116,204,1) 100%);">
          <div class="background-logo" > </div>
          
      </div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1></h1>
        <img src="./assets/logo.png" style="position: relative;" alt="" width="180" height="180">
      </div>
      <div class="login-box">
        <form class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Recuperar contraseña</h3>
          <div class="form-group">
            <label class="control-label">CORREO ELECTRÓNICO</label>
            <input class="form-control" type="text" placeholder="Usuario" name="user" autofocus required>
          </div>
          <!-- <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input class="form-control" type="password" placeholder="Contraseña" name="password" required>
          </div> -->
          <div class="form-group">

          <div class="row">
              <!-- <div class="col-12 text-center">
                  <p class="semibold-text mb-0"> No tienes cuenta?</p> <a href="register.php">Regitrate aqui</a>
              </div> -->
          </div>

            <div class="text-center">
              <!-- <div class="animated-checkbox">
                
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Seguir conectado</span>
                </label>
              </div> -->

             <div class="row col-12 mt-2">
             
              <!-- <p class="semibold-text mb-0 "><a href="lostpassword.php" data-toggle="flip"><small>Olvidaste la contraseña?</small> </a></p>
              <p  class="semibold-text mb-0 "><a href="register.php" data-toggle="flip"><small>No tenés usuario? Registrate</small> </a></p> -->
              
             </div>
            
              
              
            </div>
          </div>
          <div class="form-group btn-container">
            
            <button type="submit" name="submit" class="btn btn-primary btn-block">ENVIAR <i class="fa fa-sign-in fa-lg"></i></button>
          </div>
        </form>
        <form class="forget-form" action="index.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">RESET<i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>
<?php
//  }
?>