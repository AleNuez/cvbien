<?php
ob_start();
session_start();
// Creo una marca de logueo una vez enviado el formulario, si se envia, va a login, sino se queda acá.


//echo "ANTES:".var_dump($_POST);
//Variables de información personal
$s1_name = $_SESSION['s1_name'];
$s1_email = $_SESSION['s1_email'];
$s1_phone = $_SESSION['s1_phone'];
$s1_city = $_SESSION['s1_city'];
$s4_photo = $_SESSION['s4_photo'];
// Variables de estudios 1
$estudio1_display = $_SESSION['estudio1_display'];
$s2_year = $_SESSION['s2_year'];
$s2_year_end = $_SESSION['s2_year_end'];
$s2_title = $_SESSION['s2_title'];
$s2_place = $_SESSION['s2_place'];
$s2_studytype =$_SESSION['s2_studytype'];
$s2_description =$_SESSION['s2_description'];
// Variables de estudios 2
$estudio2_display = $_SESSION['estudio2_display'];
$s2_year_b = $_SESSION['s2_year_b'];
$s2_year_end_b = $_SESSION['s2_year_end_b'];
$s2_title_b =$_SESSION['s2_title_b'];
$s2_place_b = $_SESSION['s2_place_b'];
$s2_studytype_b =$_SESSION['s2_studytype_b'];
$s2_description_b =$_SESSION['s2_description_b'];
// Variables de estudios 3
$estudio3_display = $_SESSION['estudio3_display'];
$s2_year_c = $_SESSION['s2_year_c'];
$s2_year_end_c = $_SESSION['s2_year_end_c'];
$s2_title_c = $_SESSION['s2_title_c'];
$s2_place_c = $_SESSION['s2_place_c'];
$s2_studytype_c = $_SESSION['s2_studytype_c'];
$s2_description_c = $_SESSION['s2_description_c'];

// Variables de trabajo 1
$trabajo1_display = $_SESSION['trabajo1_display'];
$s3_year_a = $_SESSION['s3_year_a'];
$s3_year_end_a = $_SESSION['s3_year_end_a'];
$s3_position_a = $_SESSION['s3_position_a'];
$s3_place_a = $_SESSION['s3_place_a'];
$s3_tasks_a =$_SESSION['s3_tasks_a'];
// Variables de trabajo 2
$trabajo2_display = $_SESSION['trabajo2_display'];
$s3_year_b = $_SESSION['s3_year_b'];
$s3_year_end_b =$_SESSION['s3_year_end_b'];
$s3_position_b = $_SESSION['s3_position_b'];
$s3_place_b = $_SESSION['s3_place_b'];
$s3_tasks_b =$_SESSION['s3_tasks_b'];
// Variables de trabajo 3
$trabajo3_display = $_SESSION['trabajo3_display'];
$s3_year_c =$_SESSION['s3_year_c'];
$s3_year_end_c = $_SESSION['s3_year_end_c'];
$s3_position_c =$_SESSION['s3_position_c'];
$s3_place_c =$_SESSION['s3_place_c'];
$s3_tasks_c =$_SESSION['s3_tasks_c'];

// Variables de cursos 1
$curso1_display =$_SESSION['curso1_display'];
$s4_time = $_SESSION['s4_time'];
$s4_name = $_SESSION['s4_name'];
$s4_place = $_SESSION['s4_place'];
$s4_description =  $_SESSION['s4_description'];
// Variables de cursos 2
$curso2_display = $_SESSION['curso2_display'];
$s4_time_b = $_SESSION['s4_time_b'];
$s4_name_b = $_SESSION['s4_name_b'];
$s4_place_b = $_SESSION['s4_place_b'];
$s4_description_b = $_SESSION['s4_description_b'];
// Variables de cursos 3
$curso3_display = $_SESSION['curso3_display'];
$s4_time_c = $_SESSION['s4_time_c'];
$s4_name_c = $_SESSION['s4_name_c'];
$s4_place_c =$_SESSION['s4_place_c'];
$s4_description_c =$_SESSION['s4_description_c'];
// Variables de cursos 4
$curso4_display = $_SESSION['curso4_display'];
$s4_time_d = $_SESSION['s4_time_d'];
$s4_name_d = $_SESSION['s4_name_d'];
$s4_place_d = $_SESSION['s4_place_d'];
$s4_description_d =$_SESSION['s4_description_d'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Curriculum Vitae</title>

        <style type="text/css">
            @page {
                margin: 0;
            }
            body {
                margin: 0;
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

                        <?php echo $s1_email; ?><br/>
                        <?php echo $s1_phone; ?><br/>
                        <?php echo $s1_city; ?><br/>

                    </td>
                    <td style="padding-right:20px" align="right">

                       
                    <img width="150px" height="150px" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/cvbien2/images/<?php echo $s4_photo; ?>" alt="Logo" class="logo"/>
                    </td>

                </tr>

            </table>
        </div>

        <br/>

        <div style="padding-left:20px" class="invoice">
            <h2>Cualificaciones</h2>
            <!-- cualificacion #1 -->
            <table style="display:<?php echo $estudio1_display; ?>" width="100%">
                <thead>
                    <tr>
                        <th width="40%" align="left"><?php echo $s2_year; ?>-<?php echo $s2_year_end; ?></th>
                        <th align="left"><?php echo $s2_title; ?>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s2_place; ?>.<?php echo " ".$s2_description; ?> </td>
                    </tr>
                </tbody>
            </table>
            <!-- cualificacion #2 -->
            <?php if($s2_year_b && $s2_year_end_b != "") { ?>
                <table style="display:<?php echo $estudio2_display; ?>" width="100%">
            <?php }else { ?>
                <table style="display:none" width="100%">
            <?php } ?>
                <thead>
                    <tr>
                        <th width="40%" align="left"><?php echo $s2_year_b; ?>-<?php echo $s2_year_end_b; ?></th>
                        <th align="left"><?php echo $s2_title_b; ?>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s2_place_b; ?>.<?php echo " ".$s2_description_b; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- cualificacion #3 -->
            <?php if($s2_year_c && $s2_year_end_c != "") { ?>
                <table style="display:<?php echo $estudio3_display; ?>" width="100%">
            <?php }else { ?>
                <table style="display:none" width="100%">
            <?php } ?>
                <thead>
                    <tr>
                        <th width="40%" align="left"><?php echo $s2_year_c; ?>-<?php echo $s2_year_end_c; ?></th>
                        <th align="left"><?php echo $s2_title_c; ?>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s2_place_c; ?>.<?php echo " ".$s2_description_c; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div style="padding-left:20px" class="invoice">
            <h2>Experiencia Laboral</h2>
            <!-- trabajo #1 -->
            <table style="display:<?php echo $trabajo1_display; ?>" width="100%">
                <thead>
                    <tr>
                        <th width="40%" align="left"><?php echo $s3_year_a; ?>-<?php echo $s3_year_end_a; ?></th>
                        <th align="left"><?php echo $s3_position_a; ?>-<?php echo $s3_place_a; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s3_tasks_a; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- trabajo #2 -->
            <?php if($s2_year_c && $s2_year_end_c != "") { ?>
            <table style="display:<?php echo $trabajo2_display; ?>" width="100%">
            <?php }else { ?>
                <table style="display:none" width="100%">
            <?php } ?>
                <thead>
                    <tr>
                        <th width="40%" align="left"><?php echo $s3_year_b; ?>-<?php echo $s3_year_end_b; ?></th>
                        <th align="left"><?php echo $s3_position_b; ?>-<?php echo $s3_place_b; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s3_tasks_b; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- trabajo #3 -->
            <?php if($s2_year_c && $s2_year_end_c != "") { ?>
            <table style="display:<?php echo $trabajo3_display; ?>" width="100%">
            <?php }else { ?>
                <table style="display:none" width="100%">
            <?php } ?>
                <thead>
                    <tr>
                        <th width="40%" align="left"><?php echo $s3_year_c; ?>-<?php echo $s3_year_end_c; ?></th>
                        <th align="left"><?php echo $s3_position_c; ?>-<?php echo $s3_place_c; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s3_tasks_c; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div style="padding-left:20px" class="invoice">
            <h2>Cursos y Capacitaciones</h2>
            <!-- curso #1 -->
            <table style="display:<?php echo $curso1_display; ?>" width="100%">
                <thead>
                    <tr >
                        <th width="40%" align="left"><?php echo $s4_time; ?></th>
                        <th align="left"><?php echo $s4_name; ?>
                            -
                            <?php echo $s4_place; ?>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s4_description; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- curso #2 -->
            <table style="display:<?php echo $curso2_display; ?>" width="100%">
                <thead>
                    <tr >
                        <th width="40%" align="left"><?php echo $s4_time_b; ?></th>
                        <th align="left"><?php echo $s4_name_b; ?>
                            -
                            <?php echo $s4_place_b; ?>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s4_description_b; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- curso #3 -->
            <table style="display:<?php echo $curso3_display; ?>" width="100%">
                <thead>
                    <tr >
                        <th width="40%" align="left"><?php echo $s4_time_c; ?></th>
                        <th align="left"><?php echo $s4_name_c; ?>
                            -
                            <?php echo $s4_place_c; ?>
                            </th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s4_description_c; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- curso #4 -->
            <table style="display:<?php echo $curso4_display; ?>" width="100%">
                <thead>
                    <tr >
                        <th width="40%" align="left"><?php echo $s4_time_d; ?></th>
                        <th align="left"><?php echo $s4_name_d; ?>
                            -
                            <?php echo $s4_place_d; ?>
                           </th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td width="40%" align="left"></td>
                        <td align="left"><?php echo $s4_description_d; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="information" style="position: absolute; bottom: 0;">
            <table width="100%">
                <tr>
                    <td align="left" style="width: 50%;">
                        &copy; 2022 - All rights reserved.
                    </td>
                    <td align="right" style="width: 50%;">
                        Hecho con CVBien
                    </td>
                </tr>

            </table>
        </div>
    </body>
</html>

<?php
$all = ob_get_clean();
require_once "./vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Courier');
$options->setIsHtml5ParserEnabled(true);
$dompdf = new Dompdf($options);


// $html = file_get_contents("./pdf-data.php");


//$dompdf = new Dompdf();
$dompdf->set_option('isRemoteEnabled', TRUE);

$dompdf->loadHtml($all);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('miCv.pdf',array('Attachment'=>0));