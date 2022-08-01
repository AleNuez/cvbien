<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'config.php'; ?>
<?php

// Process delete operation after confirmation
if(isset($_SESSION["id"])){    

            $sql = "DELETE FROM s1 WHERE s1_id = '{$_SESSION["id"]}'";
            if ($link->query($sql) === TRUE) { echo "ES1";} else {echo "Error S1: " . $sql . "<br>" . $link->error;}
            $sql = "DELETE FROM s2 WHERE s2_id = '{$_SESSION["id"]}'";
            if ($link->query($sql) === TRUE) { echo "ES2";} else {echo "Error S2: " . $sql . "<br>" . $link->error;}
            $sql = "DELETE FROM s3 WHERE s3_id = '{$_SESSION["id"]}'";
            if ($link->query($sql) === TRUE) { echo "ES3";} else {echo "Error S3: " . $sql . "<br>" . $link->error;}
            $sql = "DELETE FROM s4 WHERE s4_id = '{$_SESSION["id"]}'";
            if ($link->query($sql) === TRUE) { echo "ES4";} else {echo "Error S4: " . $sql . "<br>" . $link->error;}
            $_SESSION['generated'] = FALSE;
            echo $_SESSION['generated'];
            // Records deleted successfully. Redirect to landing page
            ?>
            <script> location.replace("micv.php"); </script>
           <?php
           // header("location: genres.php");
        
    }
     
?>


       
 