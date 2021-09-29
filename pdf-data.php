
<?php
session_start();
// Variables de información personal
$s1_name = isset($_POST['s1-name']) ? $_POST['s1-name'] : "Nombre Apellido";
$s1_email = isset($_POST['s1-email']) ? $_POST['s1-email'] : "Correo Electrónico" ;
$s1_phone = isset($_POST['s1-phone']) ? $_POST['s1-phone'] : "11XXXX-XXXX";
$s1_city = isset($_POST['s1-city']) ? $_POST['s1-city'] : "Ciudad";
// Variables de estudios 1
$estudio1_display = isset($_POST['s2-year']) ? "inine-table" : "none";
$s2_year = isset($_POST['s2-year']) ? $_POST['s2-year'] : "20XX";
$s2_title = isset($_POST['s2-title']) ? $_POST['s2-title'] : "Título";
$s2_place = isset($_POST['s2-place']) ? $_POST['s2-place'] : "Lugar";
$s2_studytype = isset($_POST['s2-studytype']) ? $_POST['s2-studytype'] : "Tipo de Estudio";
// Variables de estudios 2
$estudio2_display = isset($_POST['s2-year-b']) ? "inine-table" : "none";
$s2_year_b = isset($_POST['s2-year-b']) ? $_POST['s2-year-b'] : "20XX";
$s2_title_b = isset($_POST['s2-title-b']) ? $_POST['s2-title-b'] : "Título";
$s2_place_b = isset($_POST['s2-place-b']) ? $_POST['s2-place-b'] : "Lugar";
$s2_studytype_b = isset($_POST['s2-studytype-b']) ? $_POST['s2-studytype-b'] : "Tipo de Estudio";
// Variables de estudios 3
$estudio3_display = isset($_POST['s2-year-c']) ? "inine-table" : "none";
$s2_year_c = isset($_POST['s2-year-c']) ? $_POST['s2-year-c'] : "20XX";
$s2_title_c = isset($_POST['s2-title-c']) ? $_POST['s2-title-c'] : "Título";
$s2_place_c = isset($_POST['s2-place-c']) ? $_POST['s2-place-c'] : "Lugar";
$s2_studytype_c = isset($_POST['s2-studytype-c']) ? $_POST['s2-studytype-c'] : "Tipo de Estudio";
// Variables de trabajo 1
$trabajo1_display = isset($_POST['s3-year']) ? "inine-table" : "none";
$s3_year = isset($_POST['s3-year']) ? $_POST['s3-year'] : "20XX";
$s3_position = isset($_POST['s3-position']) ? $_POST['s3-position'] : "Puesto";
$s3_place = isset($_POST['s3-place']) ? $_POST['s3-place'] : "Lugar";
$s3_time = isset($_POST['s3-time']) ? $_POST['s3-time'] : "2XXX";
$s3_tasks = isset($_POST['s3-tasks']) ? $_POST['s3-tasks'] : "Lista de tareas efectuadas";
// Variables de trabajo 2
$trabajo2_display = isset($_POST['s3-year-b']) ? "inine-table" : "none";
$s3_year_b = isset($_POST['s3-year-b']) ? $_POST['s3-year-b'] : "20XX";
$s3_position_b = isset($_POST['s3-position-b']) ? $_POST['s3-position-b'] : "Puesto";
$s3_place_b = isset($_POST['s3-place-b']) ? $_POST['s3-place-b'] : "Lugar";
$s3_time_b = isset($_POST['s3-time-b']) ? $_POST['s3-time-b'] : "2XXX";
$s3_tasks_b = isset($_POST['s3-tasks-b']) ? $_POST['s3-tasks-b'] : "Lista de tareas efectuadas";
// Variables de trabajo 3
$trabajo3_display = isset($_POST['s3-year-c']) ? "inine-table" : "none";
$s3_year_c = isset($_POST['s3-year-c']) ? $_POST['s3-year-c'] : "20XX";
$s3_position_c = isset($_POST['s3-position-c']) ? $_POST['s3-position-c'] : "Puesto";
$s3_place_c = isset($_POST['s3-place-c']) ? $_POST['s3-place-c'] : "Lugar";
$s3_time_c = isset($_POST['s3-time-c']) ? $_POST['s3-time-c'] : "2XXX";
$s3_tasks_c = isset($_POST['s3-tasks-c']) ? $_POST['s3-tasks-c'] : "Lista de tareas efectuadas";
// Variables de cursos 1
$curso1_display = isset($_POST['s4-year']) ? "inine-table" : "none";
$s4_time = isset($_POST['s4-time']) ? $_POST['s4-time'] : "20XX";
$s4_name = isset($_POST['s4-name']) ? $_POST['s4-name'] : "Curso";
$s4_place = isset($_POST['s4-place']) ? $_POST['s4-place'] : "Lugar";
$s4_description = isset($_POST['s4-description']) ? $_POST['s4-description'] : "Curso de Ejemplo";
// Variables de cursos 2
$curso1_display_b = isset($_POST['s4-year-b']) ? "inine-table" : "none";
$s4_time_b = isset($_POST['s4-time-b']) ? $_POST['s4-time-b'] : "20XX";
$s4_name_b = isset($_POST['s4-name-b']) ? $_POST['s4-name-b'] : "Curso";
$s4_place_b = isset($_POST['s4-place-b']) ? $_POST['s4-place-b'] : "Lugar";
$s4_description_b = isset($_POST['s4-description-b']) ? $_POST['s4-description-b'] : "Curso de Ejemplo";
// Variables de cursos 3
$curso1_display_c = isset($_POST['s4-year-c']) ? "inine-table" : "none";
$s4_time_c = isset($_POST['s4-time-c']) ? $_POST['s4-time-c'] : "20XX";
$s4_name_c = isset($_POST['s4-name-c']) ? $_POST['s4-name-c'] : "Curso";
$s4_place_c = isset($_POST['s4-place-c']) ? $_POST['s4-place-c'] : "Lugar";
$s4_description_c = isset($_POST['s4-description-c']) ? $_POST['s4-description-c'] : "Curso de Ejemplo";
// Variables de cursos 4
$curso1_display_d = isset($_POST['s4-year-d']) ? "inine-table" : "none";
$s4_time_d = isset($_POST['s4-time-d']) ? $_POST['s4-time-d'] : "20XX";
$s4_name_d = isset($_POST['s4-name-d']) ? $_POST['s4-name-d'] : "Curso";
$s4_place_d = isset($_POST['s4-place-d']) ? $_POST['s4-place-d'] : "Lugar";
$s4_description_d = isset($_POST['s4-description-d']) ? $_POST['s4-description-d'] : "Curso de Ejemplo";
// Variables de imagen
$s4_photo = isset($_POST['file']) ? $_POST['file'] : "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsRPjPKSVyBtGzgHDjSNSOIT8PGgXSG_wxBw&usqp=CAU" ;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plantilla de CV</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: medium;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
  
    <table style="padding-left:20px" width="100%">
   
        <tr>
            <td align="left" style="width: 40%;">
            <h1><?php  echo $s1_name; ?></h1>
                
                <?php echo $s1_email; ?><br />
                <?php echo $s1_phone; ?><br />
                <?php echo $s1_city; ?><br />
            


            </td>
            <td style="padding-right:20px" align="right">
        
                <img src="<?php echo $s4_photo; ?>" alt="Logo" class="logo"/>
            </td>
   
        </tr>

    </table>
</div>


<br/>

<div style="padding-left:20px" class="invoice">
    <h2>Cualificaciones</h2>
    <!-- cualificacion #1 -->
    <table style="display:<?php echo $estudio1_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s2_year; ?></th><th align="left"><?php echo $s2_title; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s2_place; ?>.</td></tr></tbody>
    </table>
    <!-- cualificacion #2 -->
    <table style="display:<?php echo $estudio2_display; ?>" width="100%">
        <thead><tr><th width="40%" align="left"><?php echo $s2_year_b; ?></th><th align="left"><?php echo $s2_title_b; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s2_place_b; ?>.</td></tr></tbody>
    </table>
    <!-- cualificacion #3 -->
    <table style="display:<?php echo $estudio3_display; ?>" width="100%">
        <thead><tr><th width="40%" align="left"><?php echo $s2_year_c; ?></th><th align="left"><?php echo $s2_title_c; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s2_place_c; ?>.</td></tr></tbody>
    </table>
</div>
<br>
<div style="padding-left:20px" class="invoice">
    <h2>Experiencia Laboral</h2>
    <!-- trabajo #1 -->
    <table style="display:<?php echo $trabajo1_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s3_time; ?></th><th align="left"><?php echo $s3_position; ?> - <?php echo $s3_place; ?> ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s3_tasks; ?>.</td></tr></tbody>
    </table>
    <!-- trabajo #2 -->
    <table style="display:<?php echo $trabajo2_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s3_time_b; ?></th><th align="left"><?php echo $s3_position_b; ?> - <?php echo $s3_place_b; ?> ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s3_tasks_b; ?>.</td></tr></tbody>
    </table>
    <!-- trabajo #3 -->
    <table style="display:<?php echo $trabajo3_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s3_time_c; ?></th><th align="left"><?php echo $s3_position_c; ?> - <?php echo $s3_place_c; ?> ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s3_tasks_c; ?>.</td></tr></tbody>
    </table>
</div>
<br>
<div style="padding-left:20px" class="invoice">
    <h2>Cursos y Capacitaciones</h2>
    <!-- curso #1 -->
    <table style="display:<?php echo $curso1_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s4_time; ?></th><th align="left"><?php echo $s4_name; ?> - <?php echo $s4_place; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s4_description; ?>.</td></tr></tbody>
    </table>
    <!-- curso #2 -->
    <table style="display:<?php echo $curso2_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s4_time_b; ?></th><th align="left"><?php echo $s4_name_b; ?> - <?php echo $s4_place_b; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s4_description_b; ?>.</td></tr></tbody>
    </table>
    <!-- curso #3 -->
    <table style="display:<?php echo $curso3_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s4_time_c; ?></th><th align="left"><?php echo $s4_name_c; ?> - <?php echo $s4_place_c; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s4_description_c; ?>.</td></tr></tbody>
    </table>
    <!-- curso #4 -->
    <table style="display:<?php echo $curso4_display; ?>" width="100%">
        <thead><tr ><th width="40%" align="left"><?php echo $s4_time_d; ?></th><th align="left"><?php echo $s4_name_d; ?> - <?php echo $s4_place_d; ?> - ESTADO</th></tr></thead>
        <tbody><tr ><td width="40%" align="left"></td><td align="left"><?php echo $s4_description_d; ?>.</td></tr></tbody>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; 2021 - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Hecho con CVBien
            </td>
        </tr>

    </table>
</div>
</body>
</html>
