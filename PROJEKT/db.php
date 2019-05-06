<?php
$db_serverName="localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "tablica";

$konekcija = new mysqli($db_serverName, $db_username, $db_password, $db_dbname);

if ($konekcija->connect_error){
    echo "Connection failed";
    die;
} 



?>