<?php

$database_host="localhost";
$database_name="xmlapp";
$databasse_username = "root";
$database_password = "";

$database_connection = new mysqli($database_host, $databasse_username, $database_password, $database_name);

if (mysqli_connect_errno()){
    echo "Database conn fail";
    die();
}

?>