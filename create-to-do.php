<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$message = $_POST["message"];


// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {

    // inserting record into to-do with username
    $sql = "INSERT INTO to_do (username, message, checked) VALUES('$username', '$message', 0)";
    
    if($conn->query($sql)){
        // getting record from to-do with username
        $sql = "SELECT id, message, checked FROM to_do WHERE username = '$username' ORDER BY date_modified DESC";
        $result = $conn->query($sql);
        $resultSet = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $resultSet[] = $row;
        }

        echo json_encode($resultSet);
    }
    else {
        echo json_encode("db-insert-error");
    }

}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();