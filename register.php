<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $username = $password = $confirm_password = "";
$email_err = $username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["user"]))){
        $username_err = "Por favor ingrese un usuario.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["user"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este usuario ya fue tomado.";
                } else{
                    $username = trim($_POST["user"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingresa una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La contraseña al menos debe tener 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirma tu contraseña.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "No coincide la contraseña.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, name, last_name, password, email, picture, active, rol_id) VALUES (?, ?, ?, ?, ?,'https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png', 0, 2)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_name, $param_lastname, $param_password, $param_email);
            
            // Set parameters
            $param_username = $username;
            $param_name = trim($_POST["firstname"]) ;
            $param_lastname = trim($_POST["lastname"]) ;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = trim($_POST["email"]) ;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.";
            }
        }
         echo var_dump($stmt);
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
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Registrate</title>

        <!-- Custom fonts for this template-->
        <link
            href="vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-imagen"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Crea una cuenta</h1>
                                </div>
                                <form
                                    class="user"
                                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text"
                                                name="firstname"
                                                class="form-control form-control-user"
                                                id="exampleFirstName"
                                                placeholder="Nombre">
                                        </div>
                                        <div class="col-sm-6">
                                            <input
                                                type="text"
                                                name="lastname"
                                                class="form-control form-control-user"
                                                id="exampleLastName"
                                                placeholder="Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                        <input
                                            type="text"
                                            name="user"
                                            class="form-control form-control-user"
                                            id="exampleInputUser"
                                            placeholder="Nombre de Usuario">
                                            <span class="help-block text-danger"><?php echo $username_err; ?></span>
                                    </div>
                                    <div class="form-group<?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control form-control-user"
                                            id="exampleInputEmail"
                                            placeholder="Correo Electrónico">
                                            <span class="help-block text-danger"><?php echo $email_err; ?></span>
                                    </div>
                                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?> row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input
                                                type="password"
                                                name="password"
                                                class="form-control form-control-user"
                                                id="exampleInputPassword"
                                                placeholder="Contraseña">
                                                <span class="help-block text-danger"><?php echo $password_err; ?></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <input
                                                type="password"
                                                name="confirm_password"
                                                class="form-control form-control-user"
                                                id="exampleRepeatPassword"
                                                placeholder="Repita Contraseña">
                                                <span class="help-block text-danger"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Ingresar">
                                        <input type="reset" class="btn btn-default" value="Borrar">
                                    </div>

                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.php">¿Olvidaste la contraseña?</a>
                                </div> -->
                                <div class="text-center">
                                    <a class="small" href="login.php">¿Ya tenés cuenta? ir a Login</a>
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