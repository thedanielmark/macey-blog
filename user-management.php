<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- base:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="css/flag-icon.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="css/simple-line-icons.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

    <div id="mainPageLoader">
        <div class="d-flex justify-content-center mt-5">
            <div class="spinner-border" role="status">
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div class="container-scroller">
            <!-- topnav -->
            <?php
                include "topnav.php";
            ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- right sidebar -->
                <?php
                    include "right-sidebar.php";
                ?>
                <!-- left-sidebar -->
                <?php
                    include "left-sidebar.php";
                ?>


                <!-- main content -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center dashboard-header flex-wrap mb-3 mb-sm-0">
                                        <h5 class="mr-4 mb-0 font-weight-bold">xStack</h5>
                                        <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                            <p class="text-muted mb-0 mr-1 hover-cursor">App</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 mr-1 hover-cursor">
                                                xStack
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">
                                                Users
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Add, remove or modify users on the LICET
                                        xStack.</h4>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1"
                                                role="tab" aria-controls="home-1" aria-selected="true">Add</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1"
                                                role="tab" aria-controls="profile-1" aria-selected="false">Remove</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!-- add users tab -->
                                        <div class="tab-pane fade show active" id="home-1" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <h6 class="font-weight-bold">
                                                Add or remove users
                                            </h6>
                                            <form id="addUserForm" class="forms-sample mt-3">
                                                <div class="row">
                                                    <div class="col col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputUsername1"
                                                                class="font-weight-bold">Username</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="User email ID"
                                                                    aria-label="Your email ID"
                                                                    aria-describedby="basic-addon2" id="newUserEmail" />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text text-dark"
                                                                        id="basic-addon2">@licet.ac.in</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputUsername1"
                                                                class="font-weight-bold">Register No</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text text-dark">3111</div>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    id="newUserRegno" placeholder="Register No">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputUsername1" class="font-weight-bold">Full
                                                        Name</label>
                                                    <input type="text" class="form-control" id="newUserFullName"
                                                        placeholder="Full Name">
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Department</label>
                                                            <select class="form-control" id="newUserDepartment">
                                                                <option>Information Technology</option>
                                                                <option>Computer Science</option>
                                                                <option>Electronics and Electrical</option>
                                                                <option>Electronics and Communucation</option>
                                                                <option>Mechanical A</option>
                                                                <option>Mechanical B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Access Level</label>
                                                            <select class="form-control" id="newUserYear">
                                                                <option>Student</option>
                                                                <option>Staff</option>
                                                                <option>HOD</option>
                                                                <option>Management</option>
                                                                <option>Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <small id="newUserError" class="text-danger mt-2 font-weight-bold">
                                                    There was an error creating the user.
                                                </small>

                                                <div class="form-group mt-4 d-flex justify-content-end">
                                                    <div id="takeAttendanceFormLoader">
                                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                                        id="takeAttendanceFormButton">
                                                        Create User
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end of add users tab -->
                                        <!-- remove users tab -->
                                        <div class="tab-pane fade" id="profile-1" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <h6 class="font-weight-bold">
                                                Add or remove users
                                            </h6>
                                            <form class="forms-sample mt-3">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender"
                                                        class="font-weight-bold">Date</label>
                                                    <div id="datepicker-popup" class="input-group date datepicker">
                                                        <input id="datepickerInput" type="text" class="form-control" />
                                                        <span class="input-group-addon input-group-append border-left">
                                                            <span class="mdi mdi-calendar input-group-text"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Department</label>
                                                            <select class="form-control" id="department">
                                                                <option>Information Technology</option>
                                                                <option>Computer Science</option>
                                                                <option>Electronics and Electrical</option>
                                                                <option>Electronics and Communucation</option>
                                                                <option>Mechanical A</option>
                                                                <option>Mechanical B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Year</label>
                                                            <select class="form-control" id="year">
                                                                <option>I</option>
                                                                <option>II</option>
                                                                <option>III</option>
                                                                <option>IV</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="exampleFormControlSelect1"
                                                        class="font-weight-bold">Subject</label>
                                                    <select class="form-control" id="subject">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1"
                                                        class="font-weight-bold">Hours</label>
                                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                        data-toggle="buttons">
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option1" />
                                                            1
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option2" /> 2
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option3" /> 3
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option4" />
                                                            4
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option5" /> 5
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option6" /> 6
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option7" />
                                                            7
                                                        </label>
                                                        <label class="btn btn-outline-primary">
                                                            <input type="checkbox" name="options" id="option8" /> 8
                                                        </label>
                                                    </div>
                                                    <small id="passwordHelpBlock" class="form-text text-muted mt-2">
                                                        Tap once to select an hour. Tap on it again to unselect
                                                        it.
                                                    </small>

                                                    <div class="form-group mt-4 d-flex justify-content-end">
                                                        <div id="takeAttendanceFormLoader">
                                                            <div
                                                                class="d-flex align-items-end jumping-dots-loader mr-3">
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary font-weight-bold"
                                                            id="takeAttendanceFormButton">
                                                            Create User
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <!-- end of remove users tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of content wrapper -->
                    <?php include "footer.php"; ?>
                </div>
                <!-- end of main-panel -->

            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
    </div>

    <!-- base:js -->
    <script>
    // hide wrapper
    document.getElementById("wrapper").style.display = "none";
    // show loader
    document.getElementById("mainPageLoader").style.display = "block";
    </script>
    <script src="js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="js/chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="js/auth-status.js"></script>
    <script src="js/logout.js"></script>
    <script src="js/profile-builder.js"></script>
</body>

</html>