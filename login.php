<?php
// Initialize the session
session_start();

//echo password_hash("visitor", PASSWORD_DEFAULT)."\n";
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: main.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $name, $last_name, $dbpassword, $email, $picture, $active, $rol_id);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $dbpassword)){
                            // Password is correct, so start a new session
                            // $password == $dbpassword
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["name"] = $name;      
                            $_SESSION["lastname"] = $last_name;    
                            $_SESSION['generated'] = FALSE;

                            
                            // Redirect user to welcome page
                            header("location: main.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Local Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div  class="card-body p-0">
                        <!-- Nested Row within Card Body style="background-color:linen;" -->
                        <div class="row">
                            <div class="col-12">
                            <h1 class="h1 m-3 text-gray-800 text-center">CVBIEN</h1>
                            <h2 class="h3 m-2 text-gray-800 text-center">Curriculums fáciles para todos</h2>

                            </div>
                            <div class="col-lg-6 d-none d-lg-block bg-login-new-imagen">
                                <!-- <img src="images/hero.png" alt=""> -->
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>
                                    </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="post" class="user">
                                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingresar Email...">
                                                <span class="help-block text-danger"><?php echo $username_err; ?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                            <span class="help-block text-danger"><?php echo $password_err; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div> -->
                                        </div>
                                        <div class="form-group">
                                         <input type="submit" class="btn btn-primary" value="Ingresar">
                                        </div>
                                        <!-- <a href="main.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                       
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.php">Olvidaste tu contraseña?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="register.php">Crear una cuenta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>