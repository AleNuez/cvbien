<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'config.php'; ?>
<?php

 //0. Proceso la imagen

$artist_img = "";



 //1. Definir variables y inicializarlas vacías.
$artist_name = $artist_country = $artist_genre = $artist_details = "";
$artist_name_err = $artist_country_err = $artist_genre_err = $artist_details_err = "";
 
//2. Chequeo si ya existe la entrada.
if(isset($_POST["artist-name"])){
    // Validar si existe
    if(empty(trim($_POST["artist-name"]))){
        $artist_name_err = "Por favor ingrese un artista.";
    } else{
        // Prepare a select statement
        $sql = "SELECT name FROM artist WHERE name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_name);
            
            // Set parameters
            $param_name = ucwords(trim($_POST["artist-name"]));
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $artist_name_err = "Este interprete ya existe.";
                } else{
                    $artist_name = ucwords(trim($_POST["artist-name"]));
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }  
//3. Check input errors before inserting in database
    if(empty($artist_name_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO artist (name,genre_id,country,image,details) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sisss", $param_name, $param_genre, $param_country, $param_image, $param_details);
            
            // Set parameters
            $param_name = $artist_name;
            $param_genre = intval($_POST["artist-genre"]);
            $param_country = $_POST["artist-country"];
            $param_image = $artist_img;
            $param_details = trim($_POST["artist-details"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                ?>
<script>
location.replace("artists.php");
</script>
<?php
               // header("location: genres.php");
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.";
            }
        }
         //echo var_dump($stmt);
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
 ?>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Crea tu Curriculum</h1>
<!-- Content Row -->
<div class="row">
    <div class=" col-12 card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Estás a un paso de tu trabajo soñado!</h6>
        </div>
        <div class="card-body">
            <form action="chkimg.php" method="post" class="user" enctype="multipart/form-data">
                <!-- ACORDEON -->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1- Acerca de mi...
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <h3 class="">Información de contacto</h3>
                                <small>Agregue sus datos para que pueda ser contactado.</small>
                                <div
                                    class="form-group row mt-2 <?php echo (!empty($album_nombre_err)) ? 'has-error' : ''; ?>">
                                    <!-- NOMBRE -->
                                    <div class="col-6">
                                        <input name="s1-name" type="text" class="form-control" placeholder="Nombre Completo"
                                            required="required">
                                    </div>
                                    <!-- EMAIL -->
                                    <div class="col-6">
                                        <input name="s1-email" type="text" class="form-control"
                                            placeholder="Correo electrónico" required="required">
                                    </div>
                                </div>
                                <div class="form-group row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <!-- TELEFONO -->
                                    <div class="col-6">
                                        <input name="s1-phone" type="text" class="form-control" placeholder="Teléfono"
                                            required="required">
                                    </div>
                                    <!-- CIUDAD -->
                                    <div class="col-6">
                                        <input name="s1-city" type="text" class="form-control"
                                            placeholder="Ciudad de residencia" required="required">
                                    </div>
                                </div>
                                <div class="form-group row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <!-- FOTO -->
                                    <div class="col-12">
                                        <input type="file" name="file" />
                                        <small>Ingrese una fotografía suya, no mayor a 5Mb.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2 - Estudios Formales
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <h3 class="card-title">Información acádemica</h3>
                                <small>Ingrese hasta 3 (Tres) estudios, los más relevantes. El más actual
                                    primero.</small><br>
                                <!-- Estudios #1 -->
                                <div class="p-4 m-2 card">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <input name="s2-year" type="text" class="form-control"
                                                placeholder="Año Desde">
                                        </div>
                                        <div class="col-md-2">
                                            <input name="s2-year-end" type="text" class="form-control"
                                                placeholder="Año Hasta">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s2-title" class="form-control"
                                                placeholder="Título">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s2-place" class="form-control"
                                                placeholder="Institución">
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-md-6">
                                            <input type="text" name="s2-studytype" class="form-control"
                                                placeholder="Tipo de estudio (Ej. Secundario)">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="s2-description" class="form-control"
                                                placeholder="Descripción">
                                        </div>
                                    </div>

                                    <div class="form-group row m-3">
                                        <div class="col-md-12">
                                            <div class="">
                                                <button id="primer-estudio" onclick="createStudy()"
                                                    class="btn btn-primary float-right" style="margin-left: 0%;">Agregar
                                                    Otro</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Estudios #1 -->
                                <!-- Estudios #2 -->
                                <div id="study2" class="p-4 m-2 card not-visible">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <input name="s2-year-b" type="text" class="form-control"
                                                placeholder="Año Desde">
                                        </div>
                                        <div class="col-md-2">
                                            <input name="s2-year-end-b" type="text" class="form-control"
                                                placeholder="Año Hasta">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s2-title-b" class="form-control"
                                                placeholder="Título">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s2-place-b" class="form-control"
                                                placeholder="Institución">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <div class="col-md-6">
                                            <input type="text" name="s2-studytype-b" class="form-control"
                                                placeholder="Tipo de estudio (Ej. Secundario)">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="s2-description-b" class="form-control"
                                                placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="form-group row m-3">
                                        <div class="col-md-12">
                                            <div>
                                                <button id="segundo-estudio" onclick="createOtherStudy()"
                                                    class="btn btn-primary float-right" style="margin-left: 0%;">Agregar
                                                    Otro</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Estudios #2 -->
                                <!-- Estudios #3 -->
                                <div id="study3" class="p-4 m-2 card not-visible">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <input name="s2-year-c" type="text" class="form-control"
                                                placeholder="Año Desde">
                                        </div>
                                        <div class="col-md-2">
                                            <input name="s2-year-end-c" type="text" class="form-control"
                                                placeholder="Año Hasta">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s2-title-c" class="form-control"
                                                placeholder="Título">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s2-place-c" class="form-control"
                                                placeholder="Institución">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <div class="col-md-6">
                                            <input type="text" name="s2-studytype-c" class="form-control"
                                                placeholder="Tipo de estudio (Ej. Secundario)">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="s2-description-c" class="form-control"
                                                placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="form-group row m-3">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </div>
                                <!-- /Estudios #3 -->

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3 - Experiencia Laboral
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <!-- Acordeón Trabajo -->
                                <h3 class="card-title">Experiencia Laboral</h3>
                                <small>Ingrese hasta 3 (Tres) trabajos, los más relevantes. El más actual
                                    primero.</small>
                                <!-- Trabajo #1 -->
                                <div class="p-4 m-2 card">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <input name="s3-year-a" type="text" class="form-control"
                                                placeholder="Año Desde">
                                        </div>
                                        <div class="col-md-2">
                                            <input name="s3-year-end-a" type="text" class="form-control"
                                                placeholder="Año Hasta">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s3-position-a" class="form-control"
                                                placeholder="Posición">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s3-place-a" class="form-control"
                                                placeholder="Empresa">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">

                                        <div class="col-md-12">
                                            <input type="text" name="s3-tasks-a" class="form-control"
                                                placeholder="Descripción (Ej. Teareas realizadas)">
                                        </div>
                                    </div>
                                    <div class="form-group row m-3">
                                        <div class="col-md-12">
                                            <button id="primer-trabajo" onclick="createJob()" class="btn btn-primary float-right"
                                                style="margin-left: 0%;">Agregar Otra</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trabajo #2 -->
                                <div id="job2" class="p-4 m-2 card not-visible">
                                    <h4 class="card-title">Experiencia Laboral</h4>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <input name="s3-year-b" type="text" class="form-control"
                                                placeholder="Año Desde">
                                        </div>
                                        <div class="col-md-2">
                                            <input name="s3-year-end-b" type="text" class="form-control"
                                                placeholder="Año Hasta">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s3-position-b" class="form-control"
                                                placeholder="Posición">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s3-place-b" class="form-control"
                                                placeholder="Empresa">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">

                                        <div class="col-md-12">
                                            <input type="text" name="s3-tasks-b" class="form-control"
                                                placeholder="Descripción (Ej. Teareas realizadas)">
                                        </div>
                                    </div>
                                    <div class="form-group row m-3">
                                        <div class="col-md-12">
                                            <button id="segundo-trabajo" onclick="createOtherJob()"
                                                class="btn btn-primary float-right" style="margin-left: 0%;">Agregar Otra</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Trabajo #3 -->
                                <div id="job3" class="p-4 m-2 card not-visible">
                                    <h4 class="card-title">Experiencia Laboral</h4>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <input name="s3-year-c" type="text" class="form-control"
                                                placeholder="Año Desde">
                                        </div>
                                        <div class="col-md-2">
                                            <input name="s3-year-end-c" type="text" class="form-control"
                                                placeholder="Año Hasta">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s3-position-c" class="form-control"
                                                placeholder="Posición">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="s3-place-c" class="form-control"
                                                placeholder="Empresa">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">

                                        <div class="col-md-12">
                                            <input type="text" name="s3-tasks-c" class="form-control"
                                                placeholder="Descripción (Ej. Teareas realizadas)">
                                        </div>
                                    </div>
                                    <div class="form-group row m-3">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <!-- /Acordeón Trabajo -->
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4 - Conocimientos y Habilidades
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                              <!-- Acordeón Cursos -->
                              <h3 class="card-title">Cursos y Capacitaciones</h3>
                                                    <small>Ingrese hasta 4 (Cuatro) otras habilidades, como cursos,
                                                        certificaciones,
                                                        idiomas o habilidades que crea convenientes agregar a su CV, las
                                                        más relevantes.</small>
                                                    <!-- Curso #1 -->
                                                    <div id="skill1" class="p-4 m-2 card">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <input name="s4-time" type="text" class="form-control"
                                                                    placeholder="Año">
                                                            </div>

                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-name" class="form-control"
                                                                    placeholder="Nombre">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-place" class="form-control"
                                                                    placeholder="Institución">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-3">

                                                            <div class="col-md-12">
                                                                <input type="text" name="s4-description"
                                                                    class="form-control" placeholder="Descripción">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-3">
                                                            <div class="col-md-12">
                                                                <button id="primer-skill" onclick="createSkill()"
                                                                    class="btn btn-primary float-right"
                                                                    style="margin-left: 0%;">Agregar Otra</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Curso #2 -->
                                                    <div id="skill2" class="p-4 m-2 card not-visible">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <input name="s4-year-b" type="text" class="form-control"
                                                                    placeholder="Año">
                                                            </div>

                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-name-b" class="form-control"
                                                                    placeholder="Nombre">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-place-b"
                                                                    class="form-control" placeholder="Institución">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-3">

                                                            <div class="col-md-12">
                                                                <input type="text" name="s4-description-b"
                                                                    class="form-control" placeholder="Descripción">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-3">
                                                            <div class="col-md-12">
                                                                <button id="segundo-skill" onclick="createOtherSkill()"
                                                                    class="btn btn-primary float-right"
                                                                    style="margin-left: 0%;">Agregar Otra</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Curso #3 -->
                                                    <div id="skill3" class="p-4 m-2 card not-visible">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <input name="s4-year-c" type="text" class="form-control"
                                                                    placeholder="Año">
                                                            </div>

                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-name-c" class="form-control"
                                                                    placeholder="Nombre">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-place-c"
                                                                    class="form-control" placeholder="Institución">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-3">

                                                            <div class="col-md-12">
                                                                <input type="text" name="s4-description-c"
                                                                    class="form-control" placeholder="Descripción">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-3">
                                                            <div class="col-md-12">
                                                                <button id="tercer-skill"
                                                                    onclick="createJustAnotherSkill()"
                                                                    class="btn btn-primary float-right"
                                                                    style="margin-left: 0%;">Agregar Otra</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Curso #4 -->
                                                    <div id="skill4" class="p-4 m-2 card not-visible">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <input name="s4-year-d" type="text" class="form-control"
                                                                    placeholder="Año">
                                                            </div>

                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-name-d" class="form-control"
                                                                    placeholder="Nombre">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" name="s4-place-d"
                                                                    class="form-control" placeholder="Institución">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-3">

                                                            <div class="col-md-12">
                                                                <input type="text" name="s4-description-d"
                                                                    class="form-control" placeholder="Descripción">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-3">
                                                            <div class=""></div>
                                                        </div>
                                                    </div>
                              <!-- /Acordeón Cursos -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- \ACORDEON -->

                <div class="form-group p-4 m-2">
                    <input type="submit" class="btn btn-primary" value="Crear">
                    <a href="main.php" class="btn btn-danger">Cancelar</a>
                </div>
                <!-- <a href="main.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->

            </form>

        </div>
        <!-- Content Row -->


        <?php include 'footer.php'; ?>