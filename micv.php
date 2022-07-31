<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'config.php'; ?>

<!-- Hero -->
<div class="row">
    <div class="col-12 bg-micv-imagen"></div>
</div>
<!-- Page Heading -->
<br>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mi curriculum</h1>
</div>

<!-- Tarjetas Row -->
<div class="row">

    <!--Articulos Card Example -->
    <div class="col-xl-12 col-md-12 mb-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="h4 m-0 font-weight-bold text-primary">Tus datos guardados</h2>
            </div>
            <div class="card-body">
                <?php
                 // Prepare a select statement
                 $sql = "SELECT * FROM s1 where s1_id = '{$_SESSION['id']}'";
                 if($stmt = mysqli_prepare($link, $sql)){

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) > 0){
                    $msj = ". Tu CV ya está listo para ver o descargar!";
                    $ok = true;
                } else{
                    $msj = ". Todavia no has creado tu CV, andá a Inicio y completá el formulario para poder descargar tu curriculum.";
                    $ok = false;
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        //mysqli_stmt_close($stmt);
        // Muestro algunos datos de prueba
       $sql = "SELECT s1_name as name FROM s1 where s1_id = 1";
        if($result_busq = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result_busq) > 0){
            while($row_busq = mysqli_fetch_array($result_busq)){
            $name = $row_busq['name']; }
            }   
        }
        $sql2 = "SELECT s2_title as estudio FROM s2 where s2_id = 1";
            if($result_busq = mysqli_query($link, $sql2)){
              if(mysqli_num_rows($result_busq) > 0){
                  while($row_busq = mysqli_fetch_array($result_busq)){
                      $estudio = $row_busq['estudio']; }
                    }
                }
                      $sql3 = "SELECT s3_position_a as trabajo FROM s3 where s3_id = 1";
                      if($result_busq = mysqli_query($link, $sql3)){
                        if(mysqli_num_rows($result_busq) > 0){
                            while($row_busq = mysqli_fetch_array($result_busq)){
                                $trabajo = $row_busq['trabajo']; }
                            }
                        }
                                $sql4 = "SELECT s4_name as curso FROM s4 where s4_id = 1";
                                if($result_busq = mysqli_query($link, $sql4)){
                                  if(mysqli_num_rows($result_busq) > 0){
                                      while($row_busq = mysqli_fetch_array($result_busq)){
                                          $curso = $row_busq['curso']; }
                                        }
                                    }

        
                ?>
                <?php echo ucfirst($_SESSION["name"]); ?><?php echo $msj; ?>
                <br>
                <?php 
                if($ok){
                ?>   
                
            <div class="row mt-3">
                            <div class="col-6"><a target="_blank" href="redirect-see.php" class="btn btn-primary btn-lg btn-block">Ver CV</a></div>
                            <div class="col-6"><a href="redirect-download.php" class="btn btn-primary btn-lg btn-block">Descargar CV</a></div>
            </div>
            <?php 
            }    
                ?> 
            </div>
        </div>
    </div>




</div>
<!-- /Tarjetas Row -->

<!-- DataTales Example -->

<!-- /DataTales Example -->

<?php include 'footer.php'; ?>