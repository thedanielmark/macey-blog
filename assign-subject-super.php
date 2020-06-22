<?php

require_once 'config.php';
error_reporting(2);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$department = $_POST["department"];
$semester = $_POST["semester"];
$staff = $_POST["staff"];
$subjectName = $_POST["subject_name"];
$subjectCode = $_POST["subject_code"];
$hours = json_decode($_POST["hours"]);

// getting auth_token
$sql = "SELECT auth_token, user_type from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$userType = $row["user_type"];


// computing primary key
$subCode_dept_sem = $subjectCode . "_" . $department . "_" . $semester;

if($auth_token === $validAuthToken && $userType === "admin") {

    foreach($hours as $toBeSplit){
        $pos = 2;
        $day = substr($toBeSplit, 0, $pos+1);
        $hour = substr($toBeSplit, $pos+1);

        // check if already exists
        $sql = "SELECT * from time_table_super WHERE week_day = '$day' AND hour = '$hour'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        if($row == "") {
            // inserting record into time_table
            $sql = "INSERT INTO time_table_super (staff_name, week_day, hour, department, semester, subject_name, subject_code, subCode_dept_sem) VALUES('$staff', '$day', '$hour', '$department', '$semester', '$subjectName', '$subjectCode', '$subCode_dept_sem')";
            
            if($conn->query($sql)){
                $count++;
            }
            else {
                $count--;
            }
        }
    }

    // checking if count = length of input
    if($count === sizeof($hours)) {
        echo json_encode("success");
    }
    else {
        echo json_encode("timetable-failed");
    }
}
else {
    echo json_encode("invalid-auth-or-access");
}

$conn->close();