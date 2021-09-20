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
            <div class="header-blue" style="margin-left: 0px;">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Hero-->
                        <div class="container hero ">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                                    <h1>Curriculums fáciles para todos.</h1>
                                    <p>Esta plataforma te ayudará a crear fácilmente un hermoso curriculum vitae
                                        listo para descargar y enviar!
                                        <br>
                                        Fácil de crear, accesible para todo tipo de personas, demostrando que la
                                        tecnología puede ser una gran aliada.
                                        <br>
                                        ¿Qué estamos esperando?
                                    </p>

                                    <button
                                        class="btn btn-warning btn-lg btn-block"
                                        type="button"
                                        data-toggle="modal"
                                        data-target="#exampleModal">
                                        Empecemos
                                    </button>

                                </div>
                                <div
                                    class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                                    <div class="iphone-mockup"><img src="assets/hero.png" class="device">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hero-->

                        <!-- Modal -->
                        <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            role="dialog"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Carga de datos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="./create-pdf.php" method="post">
                                        <div id="smartwizard">
                                            <ul>
                                                <li>
                                                    <a href="#step-1">Paso 1<br/>
                                                        <small>Información Personal</small>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-2">Paso 2<br/>
                                                        <small>Cualificaciones</small>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-3">Paso 3<br/>
                                                        <small>Experiencia</small>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-4">Paso 4<br/>
                                                        <small>Foto</small>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="mt-4">
                                                <div id="step-1">
                                                    <div class="card" style="margin: 35px;">
                                                        <h3 class="card-title">Tus Datos</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input
                                                                    name="s1-name"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Nombre"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input
                                                                    name="s1-email"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Correo electrónico"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <input
                                                                    name="s1-phone"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Teléfono"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input
                                                                    name="s1-city"
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Ciudad de residencia"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-2">
                                                    <div class="card" style="margin: 35px;">
                                                        <h3 class="card-title">Estudios Cursados</h3>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <input name="s2-year" type="text" class="form-control" placeholder="Año" required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input
                                                                    type="text"
                                                                    name="s2-title"
                                                                    class="form-control"
                                                                    placeholder="Título"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input
                                                                    type="text"
                                                                    name="s2-place"
                                                                    class="form-control"
                                                                    placeholder="Institución"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <input
                                                                    type="text"
                                                                    name="s2-studytype"
                                                                    class="form-control"
                                                                    placeholder="Tipo de estudio"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input
                                                                    type="text"
                                                                    name="s2-thingslearned"
                                                                    class="form-control"
                                                                    placeholder="Habilidades aprendidas"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row m-3">
                                                            <div class="col-md-12">
                                                                <div class="card-footer">
                                                                    <a class="btn btn-primary" href="#" style="margin-left: 5%;">Agregar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-3" class="">
                                                    <div class="card" style="margin: 35px;">
                                                        <h3 class="card-title">Experiencia Laboral</h3>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <input  name="s3-year"type="text" class="form-control" placeholder="Año" required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input
                                                                    type="text"
                                                                    name="s3-position"
                                                                    class="form-control"
                                                                    placeholder="Posición"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input
                                                                    type="text"
                                                                    name="s3-place"
                                                                    class="form-control"
                                                                    placeholder="Empresa"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-4">
                                                                <input
                                                                    type="text"
                                                                    name="s3-time"
                                                                    class="form-control"
                                                                    placeholder="Periodo"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input
                                                                    type="text"
                                                                    name="s3-tasks"
                                                                    class="form-control"
                                                                    placeholder="Teareas realizadas"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row m-3">
                                                            <div class="card-footer">
                                                                <a class="btn btn-primary" href="#" style="margin-left: 5%;">Agregar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-4" class="">
                                                    <div class="row">

                                                        <div class="card" style="margin: 35px;">
                                                            <h3 class="card-title mt-1">Imágen</h3>
                                                            <span>Agregue su foto</span>
                                                            <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
                                                            <input type="file" name="file"/>
                                                            <div class="card-body">Ingrese una fotografía suya, no mayor a 5Mb.</div>
                                                            <div class="card-footer text-right">
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 text-right">
                                                            <input type="submit" class="btn btn-warning btn-lg btn-block" value="ENVIAR">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- /Modal -->

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