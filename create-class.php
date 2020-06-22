<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$department = $_POST["department"];
$semester = $_POST["semester"];
$staff = $_POST["staff"];
$subjectName = $_POST["subject_name"];
$subjectCode = $_POST["subject_code"];
$students = json_decode($_POST["students"]);
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
        $sql = "SELECT * from time_table WHERE week_day = '$day' AND hour = '$hour'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        if($row == "") {
            // inserting record into time_table
            $sql = "INSERT INTO time_table (staff_name, week_day, hour, department, semester, subject_name, subject_code, subCode_dept_sem) VALUES('$staff', '$day', '$hour', '$department', '$semester', '$subjectName', '$subjectCode', '$subCode_dept_sem')";
            
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
        $count = 0;
        // create PK table here
        $sql = "CREATE TABLE $subCode_dept_sem (register_no VARCHAR(255) PRIMARY KEY)";
        if($conn->query($sql)){
            // insert students into the table
            foreach($students as $student){
                $sql = "INSERT INTO $subCode_dept_sem (register_no) VALUES($student)";
                if($conn->query($sql)){
                    $count++;
                }
                else {
                    $count--;
                }
            }
            if($count === count($students)) {
                echo json_encode("success");
            }
            else {
                json_encode("pk-failed");
            }
        }
    }
    else {
        echo json_encode("timetable-failed");
    }

}
else {
    echo json_encode("invalid-auth-or-access");
}

$conn->close();

