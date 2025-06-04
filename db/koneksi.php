<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_arifin_tif";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($db) {

} else {
     mysqli_connect_error();
}

?>