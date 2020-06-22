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
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
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
                                                Superuser Attendance
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-4" id="odFormContainer">
                            <!-- take attendance slide -->
                            <h6 class="font-weight-bold">
                                Your current class
                            </h6>
                            <form id="odForm" class="forms-sample mt-3">

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Date</label>
                                            <div id="datepicker-popup" class="input-group date datepicker">
                                                <input type="text" class="form-control" id="dateInput">
                                                <span class="input-group-addon input-group-append border-left">
                                                    <span class="mdi mdi-calendar input-group-text"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="inputState" class="font-weight-bold">Year</label>
                                            <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                id="yearInput" data-toggle="buttons">
                                                <label class="btn btn-outline-primary active" id="year1">
                                                    <input type="radio" name="year" value="I" checked />
                                                    I
                                                </label>
                                                <label class="btn btn-outline-primary" id="year2">
                                                    <input type="radio" name="year" value="II" /> II
                                                </label>
                                                <label class="btn btn-outline-primary" id="year3">
                                                    <input type="radio" name="year" value="III" /> III
                                                </label>
                                                <label class="btn btn-outline-primary" id="year4">
                                                    <input type="radio" name="year" value="IV" />
                                                    IV
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold">Hour</label>
                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                        id="hour" data-toggle="buttons">
                                        <label class="btn btn-outline-primary active" id="hour1">
                                            <input type="radio" name="hour" value="1" checked />
                                            1
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour2">
                                            <input type="radio" name="hour" value="2" /> 2
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour3">
                                            <input type="radio" name="hour" value="3" /> 3
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour4">
                                            <input type="radio" name="hour" value="4" />
                                            4
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour5">
                                            <input type="radio" name="hour" value="5" /> 5
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour6">
                                            <input type="radio" name="hour" value="6" /> 6
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour7">
                                            <input type="radio" name="hour" value="7" />
                                            7
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour8">
                                            <input type="radio" name="hour" value="8" /> 8
                                        </label>
                                    </div>
                                </div>

                                <div id="odFormSecondHalf">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleSelectGender"
                                                    class="font-weight-bold">Department</label>
                                                <input class="form-control disabledDiv" type="text"
                                                    id="departmentInput">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlSelect1"
                                                    class="font-weight-bold">Subject</label>
                                                <select id="subjectDropdown" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <small id="takeAttendanceError" class="text-danger mt-2 font-weight-bold">
                                    There is no class scheduled.
                                </small>

                                <div class="form-group mt-4 d-flex justify-content-end">
                                    <div id="odFormLoader">
                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary font-weight-bold" id="odFormButton">
                                        Next
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="bar-loader pt-5" id="odFormContainerLoader">
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
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/od-get-details.js"></script>
</body>

</html>