<?php

require_once 'config.php';

error_reporting(0);

// getting values from user
$username = $_POST["username"];
$enteredAuthToken = $_POST["auth_token"];

if($username == "" || $enteredAuthToken == "") {
    echo json_encode("false");
}
else {
    // getting valid auth token from db
    $sql = "SELECT auth_token FROM users WHERE username = '$username'";

    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);
    $validAuthToken = $row["auth_token"];

    if($enteredAuthToken == $validAuthToken) {
        echo json_encode("true");
    }
    else {
        echo json_encode("false");
    }
}

$conn->close();