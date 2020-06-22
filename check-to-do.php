<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$id = $_POST["id"];
$action = $_POST["action"];

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {

    // setting action based on input
    if($action === "check") {
        // inserting record into to-do with username
        $sql = "UPDATE to_do SET checked = 1 WHERE id = '$id'";
            
        if($conn->query($sql)){
            echo json_encode("success");
        }
        else {
            echo json_encode("db-error");
        }
    }
    else {
        // inserting record into to-do with username
        $sql = "UPDATE to_do SET checked = 0 WHERE id = '$id'";
                    
        if($conn->query($sql)){
            echo json_encode("success");
        }
        else {
            echo json_encode("db-error");
        }
    }
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();