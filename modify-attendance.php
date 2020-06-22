<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$hour = $_POST["hour"];

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {
    $command = escapeshellcmd("python modify_rest_ds_API.py '$username' $hour");
    $output = shell_exec($command);
    echo $output;
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();