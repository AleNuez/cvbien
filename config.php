<?php
// localhost
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'cvb');
// web
define('DB_SERVER', 'fdb25.awardspace.net');
define('DB_USERNAME', '3446176_users');
define('DB_PASSWORD', 'uLQH928ThSy.GnB');
define('DB_NAME', '3446176_users');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link, "utf8");
 
if($link === false){
    die("ERROR: No se ha podido establecer la conexión. " . mysqli_connect_error());
}
?>