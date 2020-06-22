<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$subCode_dept_sem = $_POST["subCode_dept_sem"];
$required_timestamp = $_POST["required_timestamp"];

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {
    $var = '"'.$subCode_dept_sem.'" "'.$required_timestamp.'"';
    // $command = escapeshellcmd('python modify_studlist_rest_ds_API.py '.$var);
    // echo $command;
    $output = shell_exec('python modify_studlist_rest_ds_API.py '.$var);
    echo $output;
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();