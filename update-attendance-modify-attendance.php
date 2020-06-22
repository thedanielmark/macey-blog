<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$subCode_dept_sem = strtolower($_POST["subCode_dept_sem"]);
$required_timestamp = $_POST["required_timestamp"];
$status_json_unformated = $_POST['status_json'];

$status_json = str_replace("\"","'",$status_json_unformated);

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {
    $var = '"'.$subCode_dept_sem.'" "'.$required_timestamp.'" "'.$status_json.'"';
    // $command = escapeshellcmd('python modify_studlist_rest_ds_API.py '.$var);
    $output = shell_exec('python modify_update_rest_ddest_API.py '.$var);
    echo $output;
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();