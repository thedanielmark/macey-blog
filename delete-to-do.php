<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$id = $_POST["id"];


// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {

    // inserting record into to-do with username
    $sql = "DELETE from to_do WHERE id = '$id'";
    
    if($conn->query($sql)){
        echo json_encode("delete-successful");
    }
    else {
        echo json_encode("db-delete-error");
    }

}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();