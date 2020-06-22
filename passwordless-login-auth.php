<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting</title>
    <style>
        p {
            color: white;
        }
    </style>
</head>
<body>

    <h5>You are being redirected. Please wait! :)</h5>

    <?php

    require_once 'config.php';
    error_reporting(0);

    // get username from client
    $username = $_REQUEST["username"];
    $authToken = $_REQUEST["ygieyrtgbs7rse7rtgegie7gt32w420ty978ykhgb979fvhser7brhowsi7rhf9w4ty3987tbw97gw"];

    // getting auth token from db
    $sql = "SELECT auth_token FROM users WHERE username = '$username'";

    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);
    $validAuthToken = $row["auth_token"];

    if($authToken === $validAuthToken) {
        
        $sql = "SELECT username, full_name, auth_token, department, picture_url FROM users WHERE username = '$username'";

        $result = $conn->query($sql);

        $row = mysqli_fetch_assoc($result);

        $jsonifiedResponse = json_encode($row);

        echo "<p id='jsonData'>" . $jsonifiedResponse . "</p>";
    }
    else {
        //echo json_encode("invalid-token") ;
    }

    $conn->close();

    ?>

    <script>
        // accessing JSON response from PHP script
        var jsonData = document.getElementById("jsonData").innerHTML;
        var parsedData = JSON.parse(jsonData);
        localStorage.email = parsedData.username;
        localStorage.full_name = parsedData.full_name;
        localStorage.auth_token = parsedData.auth_token;
        localStorage.department = parsedData.department;
        localStorage.picture_url = parsedData.picture_url;

        window.location.replace("home.php");
    </script>

</body>
</html>