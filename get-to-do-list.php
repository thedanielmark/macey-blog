<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {

    // inserting record into to-do with username
    $sql = "SELECT id, message, checked FROM to_do WHERE username = '$username' ORDER BY date_modified DESC";
    
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
    echo json_encode("invalid-auth-token");
}

$conn->close();