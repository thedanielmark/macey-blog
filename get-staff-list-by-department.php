<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$department = $_POST["department"];

// getting auth_token
$sql = "SELECT auth_token, user_type from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$usertype = $row["user_type"];

if($auth_token === $validAuthToken && $usertype === "admin") {

    // getting student list from users
    $sql = "SELECT username, full_name FROM users WHERE department = '$department' AND user_type = 'staff'";
    
    if(($result = $conn->query($sql)) > 0){
        $resultSet = array();
        
        while ($row = mysqli_fetch_assoc($result)) {
            $resultSet[] = $row;
        }
        echo json_encode($resultSet);
    }
    else {
        echo json_encode("db-fetch-error");
    }
}
else {
    echo json_encode("invalid-auth-or-user-type");
}

$conn->close();
