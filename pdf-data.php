
<?php
session_start();
$s1_name = $_POST['s1-name'];
$s1_email = $_POST['s1-email'];
$s1_phone = $_POST['s1-phone'];
$s1_city = $_POST['s1-city'];

$s2_year = $_POST['s2-year'];
$s2_title = $_POST['s2-title'];
$s2_place = $_POST['s2-place'];
$s2_studytype = $_POST['s2-studytype'];
$s2_thingslearned = $_POST['s2-thingslearned'];

$s3_name = $_POST['s3-year'];
$s3_position = $_POST['s3-position'];
$s3_place = $_POST['s3-place'];
$s3_time = $_POST['s3-time'];
$s3_tasks = $_POST['s3-tasks'];

$s4_photo = $_POST['file'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            font-size: small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
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
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3><?php echo $s1_name ?></h3>
                <pre>
Calle 123
Ciudad
Argentina
<br /><br />
Correo Electrónico
Teléfono
</pre>


            </td>
            <td align="right">
        
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsRPjPKSVyBtGzgHDjSNSOIT8PGgXSG_wxBw&usqp=CAU" alt="Logo" class="logo"/>
            </td>
            <!-- <td align="center" style="width: 40%;">

                <h3>CompanyName</h3>
                <pre>
                    https://company.com

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td> -->
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Estudios</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Descripción</th>
            <th>Lugar</th>
            <th>Tiempo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Escuela</td>
            <td>CABA</td>
            <td align="left">2020</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td></td>
            <td></td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="invoice">
    <h3>Experiencia Laboral</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Descripción</th>
            <th>Lugar</th>
            <th>Tiempo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Trabajo</td>
            <td>CABA</td>
            <td align="left">2020</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td></td>
            <td></td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="invoice">
    <h3>Capacitaciones</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Tipo</th>
            <th>Descripción</th>
           
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Curso</td>
            <td>Mecanica</td>
            
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td></td>
            <td></td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Hecho con CVBien
            </td>
        </tr>

    </table>
</div>
</body>
</html>
