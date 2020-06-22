<?php

require_once 'config.php';
//error_reporting(0);

// get values from client
$username = $_POST["username"];
$enteredPassword = $_POST["password"];
$newPassword = $_POST["newPassword"];

// inserting record into chats with uid
$sql = "SELECT password FROM users WHERE username = '$username'";

$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
$storedPassword = $row["password"];

// to hash the entered password
$hashedPassword = hash('sha512', $enteredPassword);

// to hash the new password
$newHashedPassword = hash('sha512', $newPassword);

if($storedPassword === $hashedPassword) {

    // insert token into db
    $sql = "UPDATE users SET password = '$newHashedPassword' WHERE username = '$username'";

    if (mysqli_query($conn, $sql)) {

        $sql = "SELECT full_name, auth_token, department, picture_url FROM users WHERE username = '$username'";

        $result = $conn->query($sql);

        $row = mysqli_fetch_assoc($result);

        echo json_encode($row);

    } else {
        echo json_encode("password-update-error");
    }

}
else {
    echo json_encode("invalid-password");
}

$conn->close();
