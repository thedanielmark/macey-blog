<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];

// getting auth_token
$sql = "SELECT access FROM api_users WHERE username = '$username'";

if(($result = $conn->query($sql)) > 0){
    
    $row = mysqli_fetch_assoc($result);
    $access = $row["access"];
    echo json_encode($access);

}
else {
    echo json_encode("no");
}

$conn->close();