<?php
header('Access-Control-Allow-Origin: *');
require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$subCode_dept_sem = strtolower($_POST["subCode_dept_sem"]);
$datetime_column = $_POST["required_timestamp"];
$attendance_list = $_POST['attendance_list'];

$jsonAttendanceList = json_decode($attendance_list, true);

// getting auth_token
$sql = "SELECT auth_token, user_type from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$usertype = $row["user_type"];

if($auth_token === $validAuthToken && $usertype === "staff") {

    $columns = array();
    // check if col exists
    $sql = "SHOW COLUMNS FROM `$subCode_dept_sem`";
    $runQuery = $conn->query($sql);
    if($runQuery){

        $count = 0;
        while($row = $runQuery -> fetch_row()) {

            if($row[0] === $datetime_column) {
                $status_json = str_replace("\"","'",$attendance_list);
                $count++;
                $var = '"'.$subCode_dept_sem.'" "'.$datetime_column.'" "'.$status_json.'"';
                $output = shell_exec('python modify_update_rest_ddest_API.py '.$var);
                echo $output;
            }
        }
        if($count === 0) {
            $sql = "ALTER TABLE $subCode_dept_sem ADD `$datetime_column` INTEGER(1) NOT NULL;";

            if($conn->query($sql)) {       
                foreach($jsonAttendanceList as $key => $value){
                    $sql = "UPDATE $subCode_dept_sem SET `$datetime_column` = $value WHERE register_no = $key";
                    $conn->query($sql);
                }
                echo json_encode("update-success");
            }
            else {
                echo json_encode("update-failed");
            }
        }
    }
    else {
        // col doesn't exist
        echo json_encode("db-fetch-error");
    }
}
else {
    echo json_encode("invalid-auth-or-user-type");
}
$conn->close();