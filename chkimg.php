<?php include 'config.php'; ?>
<?php

session_start();

$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
$max_tamanyo = 1024 * 1024 * 8;
if ( in_array($_FILES['file']['type'], $extensiones) ) {
     echo 'Es una imagen';
     if ( $_FILES['file']['size']< $max_tamanyo ) {
          echo 'Pesa menos de 1 MB';
     }
}
$ruta_indexphp = dirname(realpath(__FILE__));
$ruta_fichero_origen = $_FILES['file']['tmp_name'];
$ruta_nuevo_destino = $ruta_indexphp . '/images/' . $_FILES['file']['name'];
if ( in_array($_FILES['file']['type'], $extensiones) ) {
     echo 'Es una imagen';
     if ( $_FILES['file']['size']< $max_tamanyo ) {
          echo 'Pesa menos de 1 MB';
          if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
               echo 'Fichero guardado con éxito';
          }
     }
}
$foto = $_FILES['file']['name'];

// Variables de información personal
$_SESSION['s1_name'] = $_POST['s1-name'];
//$_SESSION['s1_name'] = isset($_POST['s1-name']) ? $_POST['s1-name'] : "Nombre Apellido";
$_SESSION['s1_email'] = isset($_POST['s1-email']) ? $_POST['s1-email'] : "Correo Electrónico" ;
$_SESSION['s1_phone'] = isset($_POST['s1-phone']) ? $_POST['s1-phone'] : "11XXXX-XXXX";
$_SESSION['s1_city'] = isset($_POST['s1-city']) ? $_POST['s1-city'] : "Ciudad";
$_SESSION['s4_photo'] = $foto;

// Variables de estudios 1
$_SESSION['estudio1_display'] = isset($_POST['s2-year']) ? "inline-table" : "none";
$_SESSION['s2_year'] = isset($_POST['s2-year']) ? $_POST['s2-year'] : "20XX";
$_SESSION['s2_year_end'] = isset($_POST['s2-year-end']) ? $_POST['s2-year-end'] : "20XX";
$_SESSION['s2_title'] = isset($_POST['s2-title']) ? $_POST['s2-title'] : "Título";
$_SESSION['s2_place'] = isset($_POST['s2-place']) ? $_POST['s2-place'] : "Lugar";
$_SESSION['s2_studytype'] = isset($_POST['s2-studytype']) ? $_POST['s2-studytype'] : "Tipo de Estudio";
$_SESSION['s2_description'] = isset($_POST['s2-description']) ? $_POST['s2-description'] : "Descripción de Estudio";
// Variables de estudios 2
$_SESSION['estudio2_display'] = isset($_POST['s2-year-b']) ? "inline-table" : "none";
$_SESSION['s2_year_b'] = isset($_POST['s2-year-b']) ? $_POST['s2-year-b'] : "20XX";
$_SESSION['s2_year_end_b'] = isset($_POST['s2-year-end-b']) ? $_POST['s2-year-end-b'] : "20XX";
$_SESSION['s2_title_b'] = isset($_POST['s2-title-b']) ? $_POST['s2-title-b'] : "Título";
$_SESSION['s2_place_b'] = isset($_POST['s2-place-b']) ? $_POST['s2-place-b'] : "Lugar";
$_SESSION['s2_studytype_b'] = isset($_POST['s2-studytype-b']) ? $_POST['s2-studytype-b'] : "Tipo de Estudio";
$_SESSION['s2_description_b'] = isset($_POST['s2-description-b']) ? $_POST['s2-description-b'] : "Descripción de Estudio";
// Variables de estudios 3
$_SESSION['estudio3_display'] = isset($_POST['s2-year-c']) ? "inline-table" : "none";
$_SESSION['s2_year_c'] = isset($_POST['s2-year-c']) ? $_POST['s2-year-c'] : "20XX";
$_SESSION['s2_year_end_c'] = isset($_POST['s2-year-end-c']) ? $_POST['s2-year-end-c'] : "20XX";
$_SESSION['s2_title_c'] = isset($_POST['s2-title-c']) ? $_POST['s2-title-c'] : "Título";
$_SESSION['s2_place_c'] = isset($_POST['s2-place-c']) ? $_POST['s2-place-c'] : "Lugar";
$_SESSION['s2_studytype_c'] = isset($_POST['s2-studytype-c']) ? $_POST['s2-studytype-c'] : "Tipo de Estudio";
$_SESSION['s2_description_c'] = isset($_POST['s2-description-c']) ? $_POST['s2-description-c'] : "Descripción de Estudio";

// Variables de trabajo 1
$_SESSION['trabajo1_display'] = isset($_POST['s3-year-a']) ? "inline-table" : "none";
$_SESSION['s3_year_a'] = isset($_POST['s3-year-a']) ? $_POST['s3-year-a'] : "20XX";
$_SESSION['s3_year_end_a'] = isset($_POST['s3-year-end-a']) ? $_POST['s3-year-end-a'] : "20XX";
$_SESSION['s3_position_a'] = isset($_POST['s3-position-a']) ? $_POST['s3-position-a'] : "Puesto";
$_SESSION['s3_place_a'] = isset($_POST['s3-place-a']) ? $_POST['s3-place-a'] : "Lugar";
$_SESSION['s3_tasks_a'] = isset($_POST['s3-tasks-a']) ? $_POST['s3-tasks-a'] : "Lista de tareas efectuadas";
// Variables de trabajo 2
$_SESSION['trabajo2_display'] = isset($_POST['s3-year-b']) ? "inline-table" : "none";
$_SESSION['s3_year_b'] = isset($_POST['s3-year-b']) ? $_POST['s3-year-b'] : "20XX";
$_SESSION['s3_year_end_b'] = isset($_POST['s3-year-end-b']) ? $_POST['s3-year-end-b'] : "20XX";
$_SESSION['s3_position_b'] = isset($_POST['s3-position-b']) ? $_POST['s3-position-b'] : "Puesto";
$_SESSION['s3_place_b'] = isset($_POST['s3-place-b']) ? $_POST['s3-place-b'] : "Lugar";
$_SESSION['s3_tasks_b'] = isset($_POST['s3-tasks-b']) ? $_POST['s3-tasks-b'] : "Lista de tareas efectuadas";
// Variables de trabajo 3
$_SESSION['trabajo3_display'] = isset($_POST['s3-year-c']) ? "inline-table" : "none";
$_SESSION['s3_year_c'] = isset($_POST['s3-year-c']) ? $_POST['s3-year-c'] : "20XX";
$_SESSION['s3_year_end_c'] = isset($_POST['s3-year-end-c']) ? $_POST['s3-year-end-c'] : "20XX";
$_SESSION['s3_position_c'] = isset($_POST['s3-position-c']) ? $_POST['s3-position-c'] : "Puesto";
$_SESSION['s3_place_c'] = isset($_POST['s3-place-c']) ? $_POST['s3-place-c'] : "Lugar";
$_SESSION['s3_tasks_c'] = isset($_POST['s3-tasks-c']) ? $_POST['s3-tasks-c'] : "Lista de tareas efectuadas";

// Variables de cursos 1
$_SESSION['curso1_display'] = isset($_POST['s4-time']) ? "inline-table" : "none";
$_SESSION['s4_time'] = isset($_POST['s4-time']) ? $_POST['s4-time'] : "20XX";
$_SESSION['s4_name'] = isset($_POST['s4-name']) ? $_POST['s4-name'] : "Curso";
$_SESSION['s4_place'] = isset($_POST['s4-place']) ? $_POST['s4-place'] : "Lugar";
$_SESSION['s4_description'] = isset($_POST['s4-description']) ? $_POST['s4-description'] : "Curso de Ejemplo";
// Variables de cursos 2
$_SESSION['curso2_display'] = isset($_POST['s4-time-b']) ? "inline-table" : "none";
$_SESSION['s4_time_b'] = isset($_POST['s4-time-b']) ? $_POST['s4-time-b'] : "20XX";
$_SESSION['s4_name_b'] = isset($_POST['s4-name-b']) ? $_POST['s4-name-b'] : "Curso";
$_SESSION['s4_place_b'] = isset($_POST['s4-place-b']) ? $_POST['s4-place-b'] : "Lugar";
$_SESSION['s4_description_b'] = isset($_POST['s4-description-b']) ? $_POST['s4-description-b'] : "Curso de Ejemplo";
// Variables de cursos 3
$_SESSION['curso3_display'] = isset($_POST['s4-time-c']) ? "inline-table" : "none";
$_SESSION['s4_time_c'] = isset($_POST['s4-time-c']) ? $_POST['s4-time-c'] : "20XX";
$_SESSION['s4_name_c'] = isset($_POST['s4-name-c']) ? $_POST['s4-name-c'] : "Curso";
$_SESSION['s4_place_c'] = isset($_POST['s4-place-c']) ? $_POST['s4-place-c'] : "Lugar";
$_SESSION['s4_description_c'] = isset($_POST['s4-description-c']) ? $_POST['s4-description-c'] : "Curso de Ejemplo";
// Variables de cursos 4
$_SESSION['curso4_display'] = isset($_POST['s4-time-d']) ? "inline-table" : "none";
$_SESSION['s4_time_d'] = isset($_POST['s4-time-d']) ? $_POST['s4-time-d'] : "20XX";
$_SESSION['s4_name_d'] = isset($_POST['s4-name-d']) ? $_POST['s4-name-d'] : "Curso";
$_SESSION['s4_place_d'] = isset($_POST['s4-place-d']) ? $_POST['s4-place-d'] : "Lugar";
$_SESSION['s4_description_d'] = isset($_POST['s4-description-d']) ? $_POST['s4-description-d'] : "Curso de Ejemplo";

//Checkeo si ya se creo cv
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

if($ok){
// Borro s1
$sql = "DELETE FROM s1 WHERE id = '{$_SESSION['id']}'";
if ($link->query($sql) === TRUE) { echo "Old record deleted successfully";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
// Añado datos de sección 1 a BD tabla 1
$sql = "INSERT INTO s1 (s1_name, s1_email, s1_phone, s1_city, s4_photo) VALUES ('{$_SESSION['s1_name']}','{$_SESSION['s1_email']}','{$_SESSION['s1_phone']}','{$_SESSION['s1_city']}','{$_SESSION['s4_photo']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
// Borro s2
$sql = "DELETE FROM s2 WHERE id = '{$_SESSION['id']}'";
if ($link->query($sql) === TRUE) { echo "Old record deleted successfully";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
// Añado datos s2
$sql = "INSERT INTO s2 (estudio1_display, s2_year, s2_year_end, s2_title, s2_place, s2_studytype, s2_description, estudio2_display, s2_year_b, s2_year_end_b, s2_title_b, s2_place_b, s2_studytype_b, s2_description_b, estudio3_display, s2_year_c, s2_year_end_c, s2_title_c, s2_place_c, s2_studytype_c, s2_description_c) VALUES ('{$_SESSION['estudio1_display']}', '{$_SESSION['s2_year']}', '{$_SESSION['s2_year_end']}', '{$_SESSION['s2_title']}', '{$_SESSION['s2_place']}', '{$_SESSION['s2_studytype']}', '{$_SESSION['s2_description']}', '{$_SESSION['estudio2_display']}', '{$_SESSION['s2_year_b']}', '{$_SESSION['s2_year_end_b']}', '{$_SESSION['s2_title_b']}', '{$_SESSION['s2_place_b']}', '{$_SESSION['s2_studytype_b']}', '{$_SESSION['s2_description_b']}', '{$_SESSION['estudio3_display']}', '{$_SESSION['s2_year_c']}', '{$_SESSION['s2_year_end_c']}', '{$_SESSION['s2_title_c']}', '{$_SESSION['s2_place_c']}', '{$_SESSION['s2_studytype_c']}', '{$_SESSION['s2_description_c']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S2: " . $sql . "<br>" . $link->error;}
// Borro s3
$sql = "DELETE FROM s3 WHERE id = '{$_SESSION['id']}'";
if ($link->query($sql) === TRUE) { echo "Old record deleted successfully";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
// Añado datos s3
$sql = "INSERT INTO s3 (trabajo1_display, s3_year_a, s3_year_end_a, s3_position_a, s3_place_a, s3_tasks_a, trabajo2_display, s3_year_b, s3_year_end_b, s3_position_b, s3_place_b, s3_tasks_b, trabajo3_display, s3_year_c, s3_year_end_c, s3_position_c, s3_place_c, s3_tasks_c) VALUES ('{$_SESSION['trabajo1_display']}', '{$_SESSION['s3_year_a']}', '{$_SESSION['s3_year_end_a']}', '{$_SESSION['s3_position_a']}', '{$_SESSION['s3_place_a']}', '{$_SESSION['s3_tasks_a']}', '{$_SESSION['trabajo2_display']}', '{$_SESSION['s3_year_b']}', '{$_SESSION['s3_year_end_b']}', '{$_SESSION['s3_position_b']}', '{$_SESSION['s3_place_b']}', '{$_SESSION['s3_tasks_b']}', '{$_SESSION['trabajo3_display']}', '{$_SESSION['s3_year_c']}', '{$_SESSION['s3_year_end_c']}', '{$_SESSION['s3_position_c']}', '{$_SESSION['s3_place_c']}', '{$_SESSION['s3_tasks_c']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S3: " . $sql . "<br>" . $link->error;}
// Borro s4
$sql = "DELETE FROM s4 WHERE id = '{$_SESSION['id']}'";
if ($link->query($sql) === TRUE) { echo "Old record deleted successfully";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
// Añado datos s4
$sql = "INSERT INTO s4 (curso1_display, s4_time, s4_name, s4_place, s4_description, curso2_display, s4_time_b, s4_name_b, s4_place_b, s4_description_b, curso3_display, s4_time_c, s4_name_c, s4_place_c, s4_description_c, curso4_display, s4_time_d, s4_name_d, s4_place_d, s4_description_d) VALUES ('{$_SESSION['curso1_display']}', '{$_SESSION['s4_time']}', '{$_SESSION['s4_name']}', '{$_SESSION['s4_place']}', '{$_SESSION['s4_description']}', '{$_SESSION['curso2_display']}', '{$_SESSION['s4_time_b']}', '{$_SESSION['s4_name_b']}', '{$_SESSION['s4_place_b']}', '{$_SESSION['s4_description_b']}', '{$_SESSION['curso3_display']}', '{$_SESSION['s4_time_c']}', '{$_SESSION['s4_name_c']}', '{$_SESSION['s4_place_c']}', '{$_SESSION['s4_description_c']}', '{$_SESSION['curso4_display']}', '{$_SESSION['s4_time_d']}', '{$_SESSION['s4_name_d']}', '{$_SESSION['s4_place_d']}', '{$_SESSION['s4_description_d']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S4: " . $sql . "<br>" . $link->error;}

} else {
// Añado datos de sección 1 a BD tabla 1
$sql = "INSERT INTO s1 (s1_id, s1_name, s1_email, s1_phone, s1_city, s4_photo) VALUES ('{$_SESSION['id']}','{$_SESSION['s1_name']}','{$_SESSION['s1_email']}','{$_SESSION['s1_phone']}','{$_SESSION['s1_city']}','{$_SESSION['s4_photo']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
// Añado datos s2
$sql = "INSERT INTO s2 (s2_id, estudio1_display, s2_year, s2_year_end, s2_title, s2_place, s2_studytype, s2_description, estudio2_display, s2_year_b, s2_year_end_b, s2_title_b, s2_place_b, s2_studytype_b, s2_description_b, estudio3_display, s2_year_c, s2_year_end_c, s2_title_c, s2_place_c, s2_studytype_c, s2_description_c) VALUES ('{$_SESSION['id']}','{$_SESSION['estudio1_display']}', '{$_SESSION['s2_year']}', '{$_SESSION['s2_year_end']}', '{$_SESSION['s2_title']}', '{$_SESSION['s2_place']}', '{$_SESSION['s2_studytype']}', '{$_SESSION['s2_description']}', '{$_SESSION['estudio2_display']}', '{$_SESSION['s2_year_b']}', '{$_SESSION['s2_year_end_b']}', '{$_SESSION['s2_title_b']}', '{$_SESSION['s2_place_b']}', '{$_SESSION['s2_studytype_b']}', '{$_SESSION['s2_description_b']}', '{$_SESSION['estudio3_display']}', '{$_SESSION['s2_year_c']}', '{$_SESSION['s2_year_end_c']}', '{$_SESSION['s2_title_c']}', '{$_SESSION['s2_place_c']}', '{$_SESSION['s2_studytype_c']}', '{$_SESSION['s2_description_c']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S2: " . $sql . "<br>" . $link->error;}
// Añado datos s3
$sql = "INSERT INTO s3 (s3_id, trabajo1_display, s3_year_a, s3_year_end_a, s3_position_a, s3_place_a, s3_tasks_a, trabajo2_display, s3_year_b, s3_year_end_b, s3_position_b, s3_place_b, s3_tasks_b, trabajo3_display, s3_year_c, s3_year_end_c, s3_position_c, s3_place_c, s3_tasks_c) VALUES ('{$_SESSION['id']}','{$_SESSION['trabajo1_display']}', '{$_SESSION['s3_year_a']}', '{$_SESSION['s3_year_end_a']}', '{$_SESSION['s3_position_a']}', '{$_SESSION['s3_place_a']}', '{$_SESSION['s3_tasks_a']}', '{$_SESSION['trabajo2_display']}', '{$_SESSION['s3_year_b']}', '{$_SESSION['s3_year_end_b']}', '{$_SESSION['s3_position_b']}', '{$_SESSION['s3_place_b']}', '{$_SESSION['s3_tasks_b']}', '{$_SESSION['trabajo3_display']}', '{$_SESSION['s3_year_c']}', '{$_SESSION['s3_year_end_c']}', '{$_SESSION['s3_position_c']}', '{$_SESSION['s3_place_c']}', '{$_SESSION['s3_tasks_c']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S3: " . $sql . "<br>" . $link->error;}
// Añado datos s4
$sql = "INSERT INTO s4 (s4_id, curso1_display, s4_time, s4_name, s4_place, s4_description, curso2_display, s4_time_b, s4_name_b, s4_place_b, s4_description_b, curso3_display, s4_time_c, s4_name_c, s4_place_c, s4_description_c, curso4_display, s4_time_d, s4_name_d, s4_place_d, s4_description_d) VALUES ('{$_SESSION['id']}','{$_SESSION['curso1_display']}', '{$_SESSION['s4_time']}', '{$_SESSION['s4_name']}', '{$_SESSION['s4_place']}', '{$_SESSION['s4_description']}', '{$_SESSION['curso2_display']}', '{$_SESSION['s4_time_b']}', '{$_SESSION['s4_name_b']}', '{$_SESSION['s4_place_b']}', '{$_SESSION['s4_description_b']}', '{$_SESSION['curso3_display']}', '{$_SESSION['s4_time_c']}', '{$_SESSION['s4_name_c']}', '{$_SESSION['s4_place_c']}', '{$_SESSION['s4_description_c']}', '{$_SESSION['curso4_display']}', '{$_SESSION['s4_time_d']}', '{$_SESSION['s4_name_d']}', '{$_SESSION['s4_place_d']}', '{$_SESSION['s4_description_d']}')";
if ($link->query($sql) === TRUE) { echo "New record created successfully";} else {echo "Error S4: " . $sql . "<br>" . $link->error;}

<<<<<<< HEAD
}



//header('Location: micv.php');
=======
$_SESSION['generated'] = TRUE;
header('Location: micv.php');
>>>>>>> 6cd6a8cd60dbe0269f5c77704ee5184aa395ef26
//header('Location: generate-cv.php');

?>
