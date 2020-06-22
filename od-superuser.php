<?php

require_once 'config.php';
error_reporting(2);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];
$department = $_POST["department"];
$year = $_POST["year"];
$date = $_POST["date"];
$hour = $_POST["hour"];

$sql = "SELECT semester from global";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$semester_db = $row["semester"];

if($year === "I" && $semester_db === "odd") {
    $semester = "1";
}
if($year === "I" && $semester_db === "even") {
    $semester = "2";
}
if($year === "II" && $semester_db === "odd") {
    $semester = "3";
}
if($year === "II" && $semester_db === "even") {
    $semester = "4";
}
if($year === "III" && $semester_db === "odd") {
    $semester = "5";
}
if($year === "III" && $semester_db === "even") {
    $semester = "6";
}
if($year === "IV" && $semester_db === "odd") {
    $semester = "7";
}
if($year === "IV" && $semester_db === "even") {
    $semester = "8";
}

// getting auth_token
$sql = "SELECT auth_token from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];

if($auth_token === $validAuthToken) {
    // $command = escapeshellcmd("python super_user_attendance_get_details.py '$department' $semester "$date" $hour");
    $output = shell_exec("python super_user_attendance_get_details.py '$department' $semester \"$date\" $hour");
    echo $output;
}
else {
    echo json_encode("invalid-auth-token");
}

$conn->close();