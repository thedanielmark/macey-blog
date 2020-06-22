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


// getting auth_token
$sql = "SELECT auth_token, user_type from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$userType = $row["user_type"];


// computing primary key
$subCode_dept_sem = $subjectCode . "_" . $department . "_" . $semester;

if($auth_token === $validAuthToken && $userType === "admin") {

    
    // getting student list from users
    $sql = "SELECT week_day, hour FROM time_table WHERE subCode_dept_sem = '$subCode_dept_sem'";
        
    if(($result = $conn->query($sql)) > 0){
        $weekDays = array();
        $hours = array();
        
        while ($row = mysqli_fetch_assoc($result)) {
            $weekDays[] = $row["week_day"];
            $hours[] = $row["hour"];
        }

        $arrlength = sizeof($hours);
        // check if you received an empty array
        if($arrlength === 0) {
            echo json_encode("failed");
        }
        else {
            for($i = 0; $i < $arrlength; $i++){

                $day = $weekDays[$i];
                $hour = $hours[$i];
    
                // inserting record into to-do with username
                $sql = "INSERT INTO time_table (staff_name, week_day, hour, department, semester, subject_name, subject_code, subCode_dept_sem) VALUES('$staff', '$day', '$hour', '$department', '$semester', '$subjectName', '$subjectCode', '$subCode_dept_sem')";
                            
                if($conn->query($sql)){
                    $count++;
                }
                else {
                    $count--;
                } 
            }
             // checking if count = length of input
             if($count == sizeof($hours)) {
                echo json_encode("success");
            }
            else {
                echo json_encode("failed");
            }
        }
    }
}

else {
    echo json_encode("invalid-auth-or-access");
}

$conn->close();