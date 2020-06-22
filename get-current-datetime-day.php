<?php

header('Access-Control-Allow-Origin: *');
error_reporting(0);
$date = date_default_timezone_set('Asia/Kolkata');
$datetime = date("Y-m-d H:i:s");
$day = date("l");
$display_date = date("Y-m-d - l");

$response -> datetime = $datetime;
$response -> week_day = $day;
$response -> displaydate = $display_date;

echo json_encode($response);