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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $s1_name ?></h3>
    <h3><?php echo $s2_place ?></h3>
    <h3><?php echo $s3_place ?></h3>
    <h3><?php echo $s4_photo?></h3>
</body>
</html>