<?php
header('Access-Control-Allow-Origin: *');
require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$type = $_POST["type"];
$category = $_POST["category"];
$subject = $_POST["subject"];
$description = $_POST["description"];

// getting auth_token
$sql = "SELECT auth_token, full_name, semester, department, register_no, username from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$fullName = $row["full_name"];
$semester = $row["semester"];
$department = $row["department"];
$registerNumber = $row["register_no"];

if($auth_token === $validAuthToken) {
    // to send email
    require("PHPMailer_5.2.4/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->SMTPDebug  = 0;

    include "mail-config.php";

    $mail->AddAddress("xstack@mixspace.xyz");
    $mail->addCC("danielmark.uc@gmail.com");
    $mail->addCC("theflyingrahul@gmail.com");

    $mail->WordWrap = 50; // set word wrap

    $mail->IsHTML(true); // set email format to HTML

    $mail->Subject = "Support ticket from xStack at Loyola-ICAM College of Enginering and Technology";

    $mail->Body = "<b>Personal Details</b><br>" . "Full name: " . $fullName . "<br>Email: " . $username . "<br>Register number: " . $registerNumber . "<br>Department: " . $department . "<br>Semester: " .$semester . "<br><br><b>Ticket Details</b><br>Type: " . $type . "<br>Category: " . $category . "<br>Subject: " . $subject . "<br>Description: " . $description . "<br><br><br><small>Submitted via get-support.php from xStack installation at Loyola-ICAM College of Engineering and Technology.</small>";

    if ($mail->Send()) {
        echo json_encode("mail-success");
    } else {
        echo json_encode("mail-fail");
    }
}
$conn->close();