<?php

header('Access-Control-Allow-Origin: *');
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
// && $usertype === "staff"
    // to send email
    require("PHPMailer_5.2.4/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->SMTPDebug  = 0;

    include "mail-config.php";

    $mail->AddAddress("theflyingrahul@gmail.com", "hello@danielmarkd.com");

    $mail->WordWrap = 50; // set word wrap

    $mail->IsHTML(true); // set email format to HTML

    $mail->Subject = "xStack Communicator for iOS - Sideload Request";

    $mail->Body = "Hey Rahul!<br><br>I'd like to sideload Communicator for xStack to my iPhone! My email ID is " . $username . "<br><br><br><small>via xStack installation at Loyola-ICAM College of Engineering and Technology<br>MixSpace Internet Services</small>";

    if ($mail->Send()) {
        echo json_encode("request-success");
    } else {
        echo json_encode("request-fail");
    }
}

$conn->close();
