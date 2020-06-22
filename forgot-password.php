<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];

// generate password reset auth token
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$forgotPasswordToken = substr(str_shuffle($permitted_chars), 0, 50);

// inserting record into users with username
$sql = "UPDATE users SET forgot_password = '$forgotPasswordToken' WHERE username = '$username'";

if($conn->query($sql)){
    // to send email
    require("PHPMailer_5.2.4/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->SMTPDebug  = 0;

    include "mail-config.php";

    $mail->AddAddress($username, "");

    $mail->WordWrap = 50; // set word wrap

    $mail->IsHTML(true); // set email format to HTML

    $mail->Subject = "Reset password for your LICET account";


    $url = "https://weareeverywhere.in/forgot-password-page.php?username=" . $username . "&etrhseystghkrhnaoiwq7ycow3h028n4hiwr7gv3w947n20tw74ty939wthb098yt=whnksjgsi3y0129835y39nhieug9ednerhjisdfhwne897v4294n0238t3t3987w4yt29y924t9274t" . "&ygieyrtgbs7rse7rtgegie7gt32w420ty978ykhgb979fvhser7brhowsi7rhf9w4ty3987tbw97gw=" . $forgotPasswordToken;

    $mail->Body = "Please click on the link below to reset your LICET account password.<br>" . $url;

    if ($mail->Send()) {
        echo json_encode("mail-success");
    } else {
        echo json_encode("mail-fail");
    }
}
else {
    echo json_encode("error-updating-token");
}
$conn->close();
