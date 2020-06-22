<?php

require_once 'config.php';
error_reporting(0);

// get values from client
$username = $_POST["username"];
$auth_token = $_POST["auth_token"];

// getting auth_token
$sql = "SELECT auth_token, user_type from users WHERE username = '$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$validAuthToken = $row["auth_token"];
$userType = $row["user_type"];


if($auth_token === $validAuthToken && $userType === "staff") {

    // getting current date and setting hour
    date_default_timezone_set("Asia/Calcutta");
    $time = date("H.i");

    if( $time >= 08.00 && $time < 08.55 ) {
        $hour = "1";
    }
    if( $time >= 08.55 && $time < 09.50 ) {
        $hour = "2";
    }
    if( $time >= 10.10 && $time < 11.00 ) {
        $hour = "3";
    }
    if( $time >= 11.00 && $time < 11.50 ) {
        $hour = "4";
    }
    if( $time >= 11.50 && $time < 12.40 ) {
        $hour = "5";
    }
    if( $time >= 13.30 && $time < 14.20 ) {
        $hour = "6";
    }
    if( $time >= 14.20 && $time < 15.10 ) {
        $hour = "7";
    }
    if( $time >= 15.10 && $time < 16.00 ) {
        $hour = "8";
    }

    // setting current day
    $today = date("l");

    if($today === "Monday") {
        $day = "mon";
    }
    if($today === "Tuesday") {
        $day = "tue";
    }
    if($today === "Wednesday") {
        $day = "wed";
    }
    if($today === "Thursday") {
        $day = "thu";
    }
    if($today === "Friday") {
        $day = "fri";
    }
    if($today === "Saturday") {
        $day = "sat";
    }
    if($today === "Sunday") {
        $day = "sun";
    }

    // temp vars for testing
    //$day = "fri";
    //$hour = "4";
    
    $date = date_default_timezone_set('Asia/Kolkata');
    $datetime_column = date("Y-m-d H:i:s");
    $overrideDate = date("Y-m-d");

    $sql = "SELECT * from time_table_super WHERE week_day = '$day' AND hour = '$hour' AND staff_name = '$username' AND override_date = '$overrideDate'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    if($row == "") {
        $sql = "SELECT * from time_table WHERE week_day = '$day' AND hour = '$hour' AND staff_name = '$username'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        if($row == "") {
            echo json_encode("no-class");
        }
        else {
            $dateTime = date("Y.m.d") . " - " . date("l");
            $row += ["datetime" => $dateTime];
            // check for col exists
            // $command = escapeshellcmd("python modify_rest_ds_API.py '$username' $hour");
            $output = shell_exec("python modify_rest_ds_API.py '$username' $hour");
            $output = json_decode($output, true);
            // echo $output;

            if($output === "not-taken") {
                $row += ["datetime_column" => $datetime_column];
                echo json_encode($row);
            }

            else if($output === "db-fetch-error") {
                 echo json_encode("db-fetch-error");
            }
            else {
                $parsed_timestamp = json_decode($output, true);
                echo $parsed_timestamp;
                $required_timestamp = $output["required_timestamp"];
                $row += ["datetime_column" => $required_timestamp];
                echo json_encode($row);
            }
        }
    }
    else {
        $dateTime = date("Y.m.d") . " - " . date("l");
        $row += ["datetime" => $dateTime];
        // check for col exists
        $command = escapeshellcmd("python modify_rest_ds_API.py '$username' $hour");
        $output = shell_exec($command);
        
        if($output === "not-taken") {
            $row += ["datetime_column" => $datetime_column];
            echo json_encode($row);
        }

        else if($output === "db-fetch-error") {
             echo json_encode("db-fetch-error");
        }
        else {
            $parsed_timestamp = json_decode($output, true);
            $required_timestamp = $parsed_timestamp["required_timestamp"];
            $row += ["datetime_column" => $required_timestamp];
            echo json_encode($row);
        }
    }
}
else {
    echo json_encode("invalid-auth-or-access");
}

$conn->close();