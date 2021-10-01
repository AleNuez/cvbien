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
                                                            <small>Mas información</small>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div id="step-1">
                                                        <h3 class="card-title">Tus Datos Personales</h3>
                                                        <div class="card" style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Información de contacto</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input
                                                                        name="s1-name"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Nombre Completo"
                                                                        >
                                                                        
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input
                                                                        name="s1-email"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Correo electrónico"
                                                                        >
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <input name="s1-phone" type="text" class="form-control" placeholder="Teléfono">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input
                                                                        name="s1-city"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Ciudad de residencia"
                                                                        >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-2">
                                                        <h3 class="card-title">Estudios Formales</h3>
                                                        <small>Ingrese hasta 3 (Tres) estudios, los más relevantes. El más actual primero.</small>
                                                        <!-- Estudios #1 -->
                                                        <div class="card" style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Agregar estudio</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s2-year" type="text" class="form-control" placeholder="Año Desde" >
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s2-year-end"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Hasta"
                                                                        >
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="s2-title" class="form-control" placeholder="Título">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-place"
                                                                        class="form-control"
                                                                        placeholder="Institución"
                                                                        >
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-studytype"
                                                                        class="form-control"
                                                                        placeholder="Tipo de estudio (Ej. Secundario)"
                                                                        >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-description"
                                                                        class="form-control"
                                                                        placeholder="Descripción"
                                                                        >
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card-footer">
                                                                        <button
                                                                            id="primer-estudio"
                                                                            onclick="createStudy()"
                                                                            class="btn btn-primary float-right"
                                                                            style="margin-left: 0%;">Agregar Otro</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Estudios #2 -->
                                                        <div
                                                            id="study2"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Agregar estudio</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s2-year-b"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Desde"
                                                                        >
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s2-year-end-b"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Hasta"
                                                                        >
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="s2-title-b" class="form-control" placeholder="Título">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-place-b"
                                                                        class="form-control"
                                                                        placeholder="Institución"
                                                                        >
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-studytype-b"
                                                                        class="form-control"
                                                                        placeholder="Tipo de estudio (Ej. Secundario)"
                                                                        >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-description-b"
                                                                        class="form-control"
                                                                        placeholder="Descripción"
                                                                       >
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="col-md-12">
                                                                    <div class="card-footer">
                                                                        <button
                                                                            id="segundo-estudio"
                                                                            onclick="createOtherStudy()"
                                                                            class="btn btn-primary"
                                                                            style="margin-left: 0%;">Agregar Otro</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Estudios #3 -->
                                                        <div
                                                            id="study3"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Agregar estudio</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s2-year-c"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Desde"
                                                                        >
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s2-year-end-c"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Hasta"
                                                                        >
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="s2-title-c" class="form-control" placeholder="Título">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-place-c"
                                                                        class="form-control"
                                                                        placeholder="Institución"
                                                                        >
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-studytype-c"
                                                                        class="form-control"
                                                                        placeholder="Tipo de estudio (Ej. Secundario)"
                                                                        >
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input
                                                                        type="text"
                                                                        name="s2-description-c"
                                                                        class="form-control"
                                                                        placeholder="Descripción"
                                                                        >
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="col-md-12"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div id="step-3" class="">
                                                        <h3 class="card-title">Experiencia Laboral</h3>
                                                        <small>Ingrese hasta 3 (Tres) trabajos, los más relevantes. El más actual primero.</small>
                                                        <!-- Trabajo #1 -->
                                                        <div class="card" style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Experiencia Laboral</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s3-year-a" type="text" class="form-control" placeholder="Año Desde">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s3-year-end-a"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Hasta">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input
                                                                        type="text"
                                                                        name="s3-position-a"
                                                                        class="form-control"
                                                                        placeholder="Posición">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="s3-place-a" class="form-control" placeholder="Empresa">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s3-tasks-a"
                                                                        class="form-control"
                                                                        placeholder="Descripción (Ej. Teareas realizadas)">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer">
                                                                    <button
                                                                        id="primer-trabajo"
                                                                        onclick="createJob()"
                                                                        class="btn btn-primary"
                                                                        style="margin-left: 3%;">Agregar Otra</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Trabajo #2 -->
                                                        <div
                                                            id="job2"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Experiencia Laboral</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s3-year-b" type="text" class="form-control" placeholder="Año Desde">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s3-year-end-b"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Hasta">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input
                                                                        type="text"
                                                                        name="s3-position-b"
                                                                        class="form-control"
                                                                        placeholder="Posición">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="s3-place-b" class="form-control" placeholder="Empresa">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s3-tasks-b"
                                                                        class="form-control"
                                                                        placeholder="Descripción (Ej. Teareas realizadas)">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer">
                                                                    <button
                                                                        id="segundo-trabajo"
                                                                        onclick="createOtherJob()"
                                                                        class="btn btn-primary"
                                                                        style="margin-left: 3%;">Agregar Otra</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Trabajo #3 -->
                                                        <div
                                                            id="job3"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Experiencia Laboral</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s3-year-c" type="text" class="form-control" placeholder="Año Desde">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input
                                                                        name="s3-year-end-c"
                                                                        type="text"
                                                                        class="form-control"
                                                                        placeholder="Año Hasta">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input
                                                                        type="text"
                                                                        name="s3-position-c"
                                                                        class="form-control"
                                                                        placeholder="Posición">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="s3-place-c" class="form-control" placeholder="Empresa">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s3-tasks-c"
                                                                        class="form-control"
                                                                        placeholder="Descripción (Ej. Teareas realizadas)">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-4" class="">

                                                        <h3 class="card-title">Cursos y Capacitaciones</h3>
                                                        <small>Ingrese hasta 4 (Cuatro) otras habilidades, como cursos, certificaciones,
                                                            idiomas o habilidades que crea convenientes agregar a su CV, las más relevantes.</small>
                                                        <!-- Curso #1 -->
                                                        <div id="skill1" class="card" style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Habilidad</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s4-time" type="text" class="form-control" placeholder="Año">
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <input type="text" name="s4-name" class="form-control" placeholder="Nombre">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-place"
                                                                        class="form-control"
                                                                        placeholder="Institución">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-description"
                                                                        class="form-control"
                                                                        placeholder="Descripción">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer">
                                                                    <button
                                                                        id="primer-skill"
                                                                        onclick="createSkill()"
                                                                        class="btn btn-primary"
                                                                        style="margin-left: 3%;">Agregar Otra</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Curso #2 -->
                                                        <div
                                                            id="skill2"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Habilidad</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s4-year-b" type="text" class="form-control" placeholder="Año">
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <input type="text" name="s4-name-b" class="form-control" placeholder="Nombre">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-place-b"
                                                                        class="form-control"
                                                                        placeholder="Institución">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-description-b"
                                                                        class="form-control"
                                                                        placeholder="Descripción">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer">
                                                                    <button
                                                                        id="segundo-skill"
                                                                        onclick="createOtherSkill()"
                                                                        class="btn btn-primary"
                                                                        style="margin-left: 3%;">Agregar Otra</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Curso #3 -->
                                                        <div
                                                            id="skill3"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Habilidad</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s4-year-c" type="text" class="form-control" placeholder="Año">
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <input type="text" name="s4-name-c" class="form-control" placeholder="Nombre">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-place-c"
                                                                        class="form-control"
                                                                        placeholder="Institución">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-description-c"
                                                                        class="form-control"
                                                                        placeholder="Descripción">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer">
                                                                    <button
                                                                        id="tercer-skill"
                                                                        onclick="createJustAnotherSkill()"
                                                                        class="btn btn-primary"
                                                                        style="margin-left: 3%;">Agregar Otra</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Curso #4 -->
                                                        <div
                                                            id="skill4"
                                                            class="card not-visible"
                                                            style="margin: 35px; background-color:#b4cbde;">
                                                            <h4 class="card-title">Habilidad</h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <input name="s4-year-d" type="text" class="form-control" placeholder="Año">
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <input type="text" name="s4-name-d" class="form-control" placeholder="Nombre">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-place-d"
                                                                        class="form-control"
                                                                        placeholder="Institución">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">

                                                                <div class="col-md-12">
                                                                    <input
                                                                        type="text"
                                                                        name="s4-description-d"
                                                                        class="form-control"
                                                                        placeholder="Descripción">
                                                                </div>
                                                            </div>
                                                            <div class="row m-3">
                                                                <div class="card-footer"></div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <h3 style="padding-left:20px" class="card-title mt-1">Imágen</h3>
                                                            <small style="padding-left:20px">Agregue una fotografía suya, puede cargarla de
                                                                sus archivos o sacarsela ahora mismo.</small>
                                                            <div class="card" style="margin: 35px;">
                                                                <h4 class="card-title mt-1">Foto</h4>
                                                                <span>Agregue su foto</span>
                                                                <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
                                                                <input type="file" name="file"/>
                                                                <div class="card-body">Ingrese una fotografía suya, no mayor a 5Mb.</div>
                                                                <div class="card-footer text-right"></div>
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