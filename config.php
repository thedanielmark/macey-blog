<?php

header('Access-Control-Allow-Origin: *');
 error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
