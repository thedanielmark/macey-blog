<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$department = $_POST["department"];
$semester = $_POST["semester"];
$subjectCode = $_POST["subject_code"];
$subjectAbbr = $_POST["subject_abbr"];
$subjectType = $_POST["subject_type"];
$subjectName = $_POST["subject_name"];


// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {

    // inserting record into to-do with username
    $sql = "INSERT INTO subject_list (subject_code, subject_name, subject_abbr, department, semester, subject_type) VALUES('$subjectCode', '$subjectName', '$subjectAbbr', '$department', '$semester', '$subjectType')";
    
    if($conn->query($sql)){
        // return success
        echo json_encode("success");
    }
    else {
        echo json_encode("failed");
    }
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();
