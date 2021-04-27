<?php
session_start();
$servername = "sdb-g.hosting.stackcp.net";
$server_user = "databasefood-3138356206";
$server_pass = "Halim2021";
$dbname = "databasefood-3138356206";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>