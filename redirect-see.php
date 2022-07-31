<?php include 'config.php'; ?>
<?php
session_start();

$sql = "SELECT * FROM s1 where s1_id = '{$_SESSION['id']}'";
if($result_busq = mysqli_query($link, $sql)){
if(mysqli_num_rows($result_busq) > 0){
    while($row_busq = mysqli_fetch_array($result_busq)){
     $_SESSION['s1_id'] = $row_busq['s1_id'];
     $_SESSION['s1_name'] = $row_busq['s1_name'];
     $_SESSION['s1_email'] = $row_busq['s1_email'];
     $_SESSION['s1_phone'] = $row_busq['s1_phone'];
     $_SESSION['s1_city'] = $row_busq['s1_city'];
     $_SESSION['s4_photo'] = $row_busq['s4_photo'];
 }
    }
}
$sql2 = "SELECT * FROM s2 where s2_id = '{$_SESSION['id']}'";
    if($result_busq = mysqli_query($link, $sql2)){
      if(mysqli_num_rows($result_busq) > 0){
          while($row_busq = mysqli_fetch_array($result_busq)){
            $_SESSION['s2_id'] = $row_busq['s2_id'];
            $_SESSION['estudio1_display'] = $row_busq['estudio1_display'];
            $_SESSION['s2_year'] =  $row_busq['s2_year']; 
            $_SESSION['s2_year_end'] =  $row_busq['s2_year_end']; 
            $_SESSION['s2_title'] =  $row_busq['s2_title'];
            $_SESSION['s2_place'] =  $row_busq['s2_place'];
            $_SESSION['s2_studytype'] =  $row_busq['s2_studytype'];
            $_SESSION['s2_description'] =  $row_busq['s2_description'];
            $_SESSION['s2_year_b'] = $row_busq['s2_year_b'];
            $_SESSION['s2_year_end_b'] = $row_busq['s2_year_end_b'];
            $_SESSION['s2_title_b'] = $row_busq['s2_title_b'];
            $_SESSION['s2_place_b'] = $row_busq['s2_place_b'];
            $_SESSION['s2_studytype_b'] = $row_busq['s2_studytype_b'];
            $_SESSION['s2_description_b'] = $row_busq['s2_description_b'];
            $_SESSION['estudio3_display'] = $row_busq['estudio3_display'];
            $_SESSION['s2_year_c'] = $row_busq['s2_year_c'];
            $_SESSION['s2_year_end_c'] = $row_busq['s2_year_end_c'];
            $_SESSION['s2_title_c'] = $row_busq['s2_title_c'];
            $_SESSION['s2_place_c'] = $row_busq['s2_place_c'];
            $_SESSION['s2_studytype_c'] = $row_busq['s2_studytype_c'];
            $_SESSION['s2_description_c'] = $row_busq['s2_description_c'];
            $_SESSION['estudio2_display'] = $row_busq['estudio2_display'];
             }
            }
        }
$sql3 = "SELECT * FROM s3 where s3_id = '{$_SESSION['id']}'";
if($result_busq = mysqli_query($link, $sql3)){
  if(mysqli_num_rows($result_busq) > 0){
      while($row_busq = mysqli_fetch_array($result_busq)){
        $_SESSION['s3_id'] = $row_busq['s3_id'];
        $_SESSION['s3_year_a'] = $row_busq['s3_year_a'];
        $_SESSION['s3_year_end_a'] = $row_busq['s3_year_end_a'];
        $_SESSION['s3_position_a'] = $row_busq['s3_position_a'];
        $_SESSION['s3_place_a'] = $row_busq['s3_place_a'];
        $_SESSION['s3_tasks_a'] = $row_busq['s3_tasks_a'];
        $_SESSION['trabajo2_display'] = $row_busq['trabajo2_display'];
        $_SESSION['s3_year_b'] = $row_busq['s3_year_b'];
        $_SESSION['s3_year_end_b'] = $row_busq['s3_year_end_b'];
        $_SESSION['s3_position_b'] = $row_busq['s3_position_b'];
        $_SESSION['s3_place_b'] = $row_busq['s3_place_b'];
        $_SESSION['s3_tasks_b'] = $row_busq['s3_tasks_b'];
        $_SESSION['trabajo3_display'] = $row_busq['trabajo3_display'];
        $_SESSION['s3_year_c'] = $row_busq['s3_year_c'];
        $_SESSION['s3_year_end_c'] = $row_busq['s3_year_end_c'];
        $_SESSION['s3_position_c'] = $row_busq['s3_position_c'];
        $_SESSION['s3_place_c'] = $row_busq['s3_place_c'];
        $_SESSION['s3_tasks_c'] = $row_busq['s3_tasks_c'];
        $_SESSION['trabajo1_display'] = $row_busq['trabajo1_display'];
         }
      }
  }
$sql4 = "SELECT * FROM s4 where s4_id = '{$_SESSION['id']}'";
if($result_busq = mysqli_query($link, $sql4)){
  if(mysqli_num_rows($result_busq) > 0){
      while($row_busq = mysqli_fetch_array($result_busq)){
        $_SESSION['s4_id'] = $row_busq['s4_id'];
        $_SESSION['s4_time'] = $row_busq['s4_time'];
        $_SESSION['s4_name'] = $row_busq['s4_name'];
        $_SESSION['s4_place'] = $row_busq['s4_place'];
        $_SESSION['s4_description'] = $row_busq['s4_description'];
        $_SESSION['curso2_display'] = $row_busq['curso2_display'];
        $_SESSION['s4_time_b'] = $row_busq['s4_time_b'];
        $_SESSION['s4_name_b'] = $row_busq['s4_name_b'];
        $_SESSION['s4_place_b'] = $row_busq['s4_place_b'];
        $_SESSION['s4_description_b'] = $row_busq['s4_description_b'];
        $_SESSION['curso3_display'] = $row_busq['curso3_display'];
        $_SESSION['s4_time_c'] = $row_busq['s4_time_c'];
        $_SESSION['s4_name_c'] = $row_busq['s4_name_c'];
        $_SESSION['s4_place_c'] = $row_busq['s4_place_c'];
        $_SESSION['s4_description_c'] = $row_busq['s4_description_c'];
        $_SESSION['curso4_display'] = $row_busq['curso4_display'];
        $_SESSION['s4_time_d'] = $row_busq['s4_time_d'];
        $_SESSION['s4_name_d'] = $row_busq['s4_name_d'];
        $_SESSION['s4_place_d'] = $row_busq['s4_place_d'];
        $_SESSION['s4_description_d'] = $row_busq['s4_description_d'];
        $_SESSION['curso1_display'] = $row_busq['curso1_display'];
         }
        }
    }
    // echo $_SESSION['id'];
    // echo $_SESSION['s1_name'];
    // echo $_SESSION['s2_title'];
    // echo $_SESSION['s3_position_a'];
    // echo $_SESSION['s4_name'];


    header('Location: generate-cv.php');

?>