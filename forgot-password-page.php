<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet"
        href="css/simple-line-icons.css">

    <title>LICET</title>
</head>

<body class="landing-body">
    <div class="container d-flex justify-content-center">
        <!--vertical align on parent using my-auto-->
        <div id="login-jumbotron-row" class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="jumbotron py-5">
                    <nav class="navbar py-0 px-0 mb-3">
                        <a class="navbar-brand text-secondary font-weight-bold" href="#">
                            <img src="images/licet-logo.png" width="50" height="50" class="d-inline-block align-top"
                                alt="LICET Logo" />
                            LICET
                        </a>
                    </nav>

                    <form id="newPasswordForm">

                        <p class="h4 mb-2">Enter password</p>

                        <div class="form-group mb-3">
                            <small>
                                Please enter a new password
                            </small>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password"
                                placeholder="Your new password" autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirmPassword"
                                placeholder="Confirm password" />
                        </div>

                        <div class="form-group">
                            <small class="text-danger" id="newPasswordError">Please enter a valid password</small>
                        </div>

                        <small id="emailHelp" class="form-text mt-4"><a href="index.html"
                                class="text-primary">Back to login</a></small>

                        <ul class="nav justify-content-end mt-2">
                            <li class="nav-item">
                                <div class="spinner-border text-secondary ml-auto mr-3" role="status" id="newPasswordLoader">
                                </div>
                            </li>
                            <li class="nav-item">
                                <button type="submit" class="btn btn-primary py-1 px-5 ml-auto" id="changePasswordButton">
                                    Change Password
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
                <!-- end of jumbotron -->
            </div>
        </div>
    </div>
    <!-- end of main container -->

    <div class="footer text-sm">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Terms of Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">MixSpace Internet Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Mer Community</a>
            </li>
        </ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- custom JavaScript files -->
    <script src="js/forgot-password.js"></script>
</body>

</html>