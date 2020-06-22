<?php
require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$subCode_dept_sem = $_POST["subCode_dept_sem"];
$required_column = $_POST["required_timestamp"];

// getting auth_token
$sql = "SELECT auth_token, user_type from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$usertype = $row["user_type"];

if($auth_token === $validAuthToken && $usertype === "staff") {
    // check if col exists
    // getting student list from users
    $sql = "SHOW COLUMNS FROM `$subCode_dept_sem`";
    $runQuery = $conn->query($sql);
    if($runQuery){
        $count = 0;
        while($row = $runQuery -> fetch_row()) {
            if($row[0] === $required_column) {
                $count++;
                $var = '"'.$subCode_dept_sem.'" "'.$required_column.'"';
                $output = shell_exec('python modify_studlist_rest_ds_API.py '.$var);
                echo $output;
            }
        }
        if($count === 0) {
            // getting student list from users
            $sql = "SELECT register_no FROM $subCode_dept_sem";
            
            if(($result = $conn->query($sql)) > 0){
                $registerNoList = array();
                $finalResult = array();
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $registerNoList[] = $row["register_no"];
                }
                foreach($registerNoList as $registerNo) {
                    $sql = "SELECT register_no, full_name, semester, department, picture_url FROM users WHERE register_no = '$registerNo'";
                    if(($result = $conn->query($sql)) > 0){            
                        while ($row = mysqli_fetch_assoc($result)) {
                            $row["status"] = "0";
                            $finalResult[] = $row;
                        }
                    }
                    else {
                        echo json_encode("db-fetch-error");
                    }
                }
                echo json_encode($finalResult);
            }
            else {
                echo json_encode("db-fetch-error");
            }
        }
    }
    else {
        echo json_encode("db-fetch-error");
    }
}
else {
    echo json_encode("invalid-auth-or-user-type");
}
$conn->close();
