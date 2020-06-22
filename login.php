<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$enteredPassword = $_POST["password"];

// inserting record into chats with uid
$sql = "SELECT password FROM users WHERE username = '$username'";

$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
$storedPassword = $row["password"];

// to hash the entered password
$hashedPassword = hash('sha512', $enteredPassword);

if($storedPassword === $hashedPassword) {
    // generate auth token
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $authToken = substr(str_shuffle($permitted_chars), 0, 28);

    // insert token into db
    $sql = "UPDATE users SET auth_token = '$authToken' WHERE username = '$username'";

    if (mysqli_query($conn, $sql)) {

        $sql = "SELECT full_name, auth_token, department, picture_url FROM users WHERE username = '$username'";

        $result = $conn->query($sql);

        $row = mysqli_fetch_assoc($result);

        echo json_encode($row);

    } else {
        echo json_encode("auth-error");
    }

}
else {
    echo json_encode("invalid-password");
}

$conn->close();
