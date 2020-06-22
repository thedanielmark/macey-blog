<?php

require_once 'config.php';
//error_reporting(0);

// get values from client
$username = $_POST["username"];
$newPassword = $_POST["newPassword"];
$forgotPasswordToken = $_POST["forgotPasswordToken"];

// inserting record into chats with uid
$sql = "SELECT forgot_password FROM users WHERE username = '$username'";

$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
$validPasswordToken = $row["forgot_password"];

if($validPasswordToken === $forgotPasswordToken) {

    // to hash the new entered password
    $hashedPassword = hash('sha512', $newPassword);

    // insert new password into db
    $sql = "UPDATE users SET password = '$hashedPassword' WHERE username = '$username'";

    if (mysqli_query($conn, $sql)) {

        $sql = "SELECT username, full_name, auth_token, department, picture_url FROM users WHERE username = '$username'";

        $result = $conn->query($sql);

        $row = mysqli_fetch_assoc($result);

        echo json_encode($row);

    } else {
        echo json_encode("password-update-error");
    }

}
else {
    echo json_encode("invalid-token");
}

$conn->close();
