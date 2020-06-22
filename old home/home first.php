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

    <title>LICET</title>
</head>

<body>

    <div id="mainPageLoader">
        <div class="d-flex justify-content-center mt-5">
            <div class="spinner-border" role="status">
            </div>
        </div>
    </div>

    <div id="wrapper">
        <nav class="navbar navbar-expand-lg bg-dark-purple py-0">
            <div class="container">
                <!-- <a class="navbar-brand" href="#"><img src="images/licet-logo.png" height="50" width="50" alt=""></a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto font-weight-bold">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="#">Update</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="#">View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="#">Export</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v text-white"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="dropdownMenuButton">
                                <div id="dropdown-card" class="card" style="width: 18rem;">
                                    <img class="card-img-top" id="current-user-profile-picture">
                                    <div class="card-body">
                                        <h5 class="card-title py-0" id="current-user-full-name-container"></h5>
                                        <p class="card-text">
                                            <span class="badge badge-dark py-2 px-2"
                                                id="current-user-department-container"></span>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <a class="dropdown-item" href="#">
                                            Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            About
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="logout()">
                                            Logout
                                        </a>
                                    </ul>
                                    <div class="card-body py-2 d-flex">
                                        <small class="text-secondary ml-auto">Version 1.0.0</small>
                                    </div>
                                </div>
                            </div><!-- end of dropdown list -->
                        </div>

                    </span>
                </div>
            </div>
        </nav><!-- end of Navbar content -->

        <div class="container">
            <div class="container mt-5">
                <h5 class="font-weight-bold d-block">Hello <script>
                    document.write(localStorage.full_name);
                    </script>!</h5>
                <h6 class="font-weight-bold">Choose one of the services below to get started.</h6>
            </div>
            <div class="container mt-5">
                <div class="card-deck">
                    <div class="card services-card">
                        <img src="images/assets/checklist.png" class="card-img-top py-3" alt="Checklist">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Take Attendance</h5>
                            <p class="card-text">Take or modify a student's attendance, on-duty, etc.</p>
                        </div>
                        <div class="card-footer">
                            <a href="take-attendance-page.html">
                                <button type="button" class="btn btn-primary btn-block btn-sm px-4">Start</button>
                            </a>
                        </div>
                    </div>
                    <div class="card services-card">
                        <img src="images/assets/name.png" class="card-img-top py-3" alt="Names">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">View Attendance</h5>
                            <p class="card-text">Filter and view attendance details.</p>
                        </div>
                        <div class="card-footer">
                            <a href="take-attendance-page.html">
                                <button type="button" class="btn btn-primary btn-block btn-sm px-4">Start</button>
                            </a>
                        </div>
                    </div>
                    <div class="card services-card">
                        <img src="images/assets/excel.png" class="card-img-top py-3" alt="Excel">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Export Attendance</h5>
                            <p class="card-text">Apply filters and export attendance as Excel sheets.</p>
                        </div>
                        <div class="card-footer">
                            <a href="take-attendance-page.html">
                                <button type="button" class="btn btn-primary btn-block btn-sm px-4">Start</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end of card container -->
        </div><!-- end of main container -->

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
    </div><!-- end of wrapper -->

    <!-- Optional JavaScript -->
    <script>
    // hide wrapper
    document.getElementById("wrapper").style.display = "none";
    // show loader
    document.getElementById("mainPageLoader").style.display = "block";
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- custom JavaScript files -->
    <script src="js/auth-status.js"></script>
    <script src="js/logout.js"></script>
    <script>
    // building current user profile
    document.getElementById("current-user-full-name-container").innerHTML = localStorage.full_name;
    document.getElementById("current-user-department-container").innerHTML = localStorage.department;
    var unformatted_picture_url = localStorage.picture_url;
    var picture_url = unformatted_picture_url.replace(/\\/g, "");
    document.getElementById("current-user-profile-picture").setAttribute("src", picture_url);
    </script>
</body>

</html>