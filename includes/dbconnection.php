<?php

$server = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login_system";

$conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die (mysqli_connect_error());
}