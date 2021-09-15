<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="styles/style.css">
        <title>Vali Admin</title>
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
    <body class="sidebar-mini fixed" style="background: linear-gradient(135deg, #172a74, #21a9af); background-color: #172a74;">
        <div class="wrapper">
            <div class="header-blue" style="margin-left: 0px;">
                <div class="row">
                    <div class="col-md-12">
                        
                    <button
                                class="btn btn-light btn-lg action-button"
                                type="button"
                                data-toggle="modal"
                                data-target="#exampleModal">
                                Launch multistep Wizard
                            </button>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Smart Wizard modal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
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
                                                            <small>Sobre mi</small>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div id="step-1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder="Nombre" required="required">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder="Correo electrónico" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Teléfono"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Ciudad de residencia"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-2">
                                                        <div class="panel panel-default">
                        <div class="panel-body">Basic panel</div>
                        <p>Gola</p>
                      </div>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Año"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Título"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" placeholder="Institución" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" placeholder="Tipo de estudio" required="required">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Habilidades aprendidas"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row m-3">
                                                            <div class="col-md-12">
                                                            <button type="button" class="btn btn-primary">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-3" class="">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Año"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Posición"
                                                                    required="required">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" placeholder="Empresa" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Periodo" required="required">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Teareas realizadas"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="row m-3">
                                                            <div class="col-md-12">
                                                            <button type="button" class="btn btn-primary">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-4" class="">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <span>Foto y descripción</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   


                    </div>
                </div>
            </div>
        </div>
        <!-- Javascripts-->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/pace.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>