<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'config.php'; ?>

    <!-- Hero -->
<div class="row">
<div class="col-12 bg-hero"></div>
</div>
            <!-- Page Heading -->
            <br>
            <h1 class="h3 mb-4 text-gray-800">¡Te damos la Bienvenida <b><?php echo ucfirst($_SESSION["name"]); ?></b>!</h1>
            <!-- Tarjetas Row -->
            <div class="row">

<!--Articulos Card Example -->
<div class="col-xl-12 col-md-12 mb-12">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-12">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-12">
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <form action="create-cv.php" method="post">
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary  btn-lg btn-block" value=" + | Crear Curriculum"></div>
                </form>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- <i class="fas fa-archive fa-2x text-gray-300"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

         

                
            </div>
            <!-- /Tarjetas Row -->

            <!-- DataTales Example -->
           
             <!-- /DataTales Example -->

            <?php include 'footer.php'; ?>