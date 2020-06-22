<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$staff = $_POST["staff"];
$subjectCode = $_POST["subject_code"];

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {

    // inserting record into to-do with username
    $sql = "SELECT username FROM users WHERE username = '$staff'";

    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);
          
    // check if result set is same as what if given
    if($row["username"] === $staff){

        // inserting record into to-do with username
        $sql = "SELECT subject_code FROM subject_list WHERE subject_code = '$subjectCode'";

        $result = $conn->query($sql);

        $row = mysqli_fetch_assoc($result);
                    
        if($row["subject_code"] === $subjectCode){
            $resultSet = array();

            echo json_encode("exists");
        }
        else {
            echo json_encode("db-error");
        }
    }
    else {
        echo json_encode("db-error");
    }
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();