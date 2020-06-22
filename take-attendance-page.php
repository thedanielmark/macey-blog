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
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet"
        href="css/simple-line-icons.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

    <div class="d-flex justify-content-center">
        <div class="bar-loader mt-4" id="mainPageLoader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
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
                                                Take Attendance
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-4" id="takeAttendanceContainer">
                            <!-- take attendance slide -->
                            <h6 class="font-weight-bold">
                                Your current class
                            </h6>
                            <form id="takeAttendanceForm" class="forms-sample mt-3">
                                <div class="form-group">
                                    <label for="exampleSelectGender" class="font-weight-bold">Date</label>
                                    <input class="form-control disabledDiv" type="text" id="takeAttendanceDateInput">
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Year</label>
                                            <input class="form-control disabledDiv" type="text"
                                                id="takeAttendanceYearInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Semester</label>
                                            <input class="form-control disabledDiv" type="text"
                                                id="takeAttendanceSemesterInput">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Department</label>
                                            <input class="form-control disabledDiv" type="text"
                                                id="takeAttendanceDepartmentInput">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect1"
                                                class="font-weight-bold">Subject</label>
                                            <input class="form-control disabledDiv" type="text"
                                                id="takeAttendanceSubjectInput">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold">Hours</label>
                                    <div
                                        class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center disabledDiv">
                                        <label class="btn btn-outline-primary" id="hour1">
                                            <input type="checkbox" name="options" />
                                            1
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour2">
                                            <input type="checkbox" name="options" /> 2
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour3">
                                            <input type="checkbox" name="options" /> 3
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour4">
                                            <input type="checkbox" name="options" />
                                            4
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour5">
                                            <input type="checkbox" name="options" /> 5
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour6">
                                            <input type="checkbox" name="options" /> 6
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour7">
                                            <input type="checkbox" name="options" />
                                            7
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour8">
                                            <input type="checkbox" name="options" /> 8
                                        </label>
                                    </div>
                                </div>

                                <small id="takeAttendanceError" class="text-danger mt-2 font-weight-bold">
                                    There was an error while retrieving your information. Please refresh this page and
                                    try again.
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
                                        Next
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div id="takeAttendanceContainerError" class="container mt-5 h-100">
                            <div class="mx-auto text-center"><i class="icon-check text-success h1"></i>
                                <h4 class="mt-5 font-weight-bold">You're All Caught Up</h4>
                                <h5 class="mt-3 text-secondary">You don't have a class right now.</h5>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="bar-loader pt-5" id="takeAttendancePageLoader">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
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
    <script src="js/get-take-attendance-details.js"></script>
</body>

</html>