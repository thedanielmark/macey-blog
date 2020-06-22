<?php

require_once 'config.php';
error_reporting(0);

// get username from client
$username = $_POST["username"];

// getting auth token from db
$sql = "SELECT auth_token FROM users WHERE username = '$username'";

$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
$authToken = $row["auth_token"];

if($authToken === "") {
    echo json_encode("invalid-email");
}
else {
    // to send email
    require("PHPMailer_5.2.4/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->SMTPDebug  = 0;

    include "mail-config.php";

    $mail->AddAddress($username, "");

    $mail->WordWrap = 50; // set word wrap

    $mail->IsHTML(true); // set email format to HTML

    $mail->Subject = "Sign In to LICET";


    $url = "https://weareeverywhere.in/passwordless-login-auth.php?username=" . $username . "&etrhseystghkrhnaoiwq7ycow3h028n4hiwr7gv3w947n20tw74ty939wthb098yt=whnksjgsi3y0129835y39nhieug9ednerhjisdfhwne897v4294n0238t3t3987w4yt29y924t9274t" . "&ygieyrtgbs7rse7rtgegie7gt32w420ty978ykhgb979fvhser7brhowsi7rhf9w4ty3987tbw97gw=" . $authToken;

    $mail->Body = "Please click on the link below to login to your LICET account<br>" . $url;

    if ($mail->Send()) {
        echo json_encode("mail-success");
    } else {
        echo json_encode("mail-fail");
    }
}

$conn->close();
