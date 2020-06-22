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
                                                Modify Attendance
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-4" id="modifyAttendanceFormContainer">
                            <!-- take attendance slide -->
                            <h6 class="font-weight-bold">
                                Your current class
                            </h6>
                            <form id="modifyAttendanceForm" class="forms-sample mt-3">
                                <div class="form-group">
                                    <label for="exampleSelectGender" class="font-weight-bold">Date</label>
                                    <input class="form-control disabledDiv" type="text" id="modifyAttendanceDateInput">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold">Hours</label>
                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                        data-toggle="buttons">
                                        <label class="btn btn-outline-primary active" id="hour1" onclick="getHourDetails(1)">
                                            <input type="radio" name="hour" value="1"
                                                checked />
                                            1
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour2" onclick="getHourDetails(2)">
                                            <input type="radio" name="hour" value="2" /> 2
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour3" onclick="getHourDetails(3)">
                                            <input type="radio" name="hour" value="3" /> 3
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour4" onclick="getHourDetails(4)">
                                            <input type="radio" name="hour" value="4" />
                                            4
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour5" onclick="getHourDetails(5)" >
                                            <input type="radio" name="hour" value="5" /> 5
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour6" onclick="getHourDetails(6)">
                                            <input type="radio" name="hour" value="6" /> 6
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour7" onclick="getHourDetails(7)">
                                            <input type="radio" name="hour" value="7" />
                                            7
                                        </label>
                                        <label class="btn btn-outline-primary" id="hour8" onclick="getHourDetails(8)" >
                                            <input type="radio" name="hour" value="8" /> 8
                                        </label>
                                    </div>
                                </div>

                                <div id="modifyAttendanceFormSecondHalf">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleSelectGender" class="font-weight-bold">Year</label>
                                                <input class="form-control disabledDiv" type="text"
                                                    id="modifyAttendanceYearInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleSelectGender"
                                                    class="font-weight-bold">Semester</label>
                                                <input class="form-control disabledDiv" type="text"
                                                    id="modifyAttendanceSemesterInput">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleSelectGender"
                                                    class="font-weight-bold">Department</label>
                                                <input class="form-control disabledDiv" type="text"
                                                    id="modifyAttendanceDepartmentInput">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlSelect1"
                                                    class="font-weight-bold">Subject</label>
                                                <input class="form-control disabledDiv" type="text"
                                                    id="modifyAttendanceSubjectInput">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <small id="modifyAttendanceError" class="text-danger mt-2 font-weight-bold">
                                    You did not have a class during the selected hour. Please select the hour correctly to modify the attendance.
                                </small>

                                <div class="form-group mt-4 d-flex justify-content-end">
                                    <div id="modifyAttendanceFormLoader">
                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                        id="modifyAttendanceFormButton">
                                        Next
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="bar-loader pt-5" id="modifyAttendanceFormContainerLoader">
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
    <script src="js/modify-attendance-get-details.js"></script>
</body>

</html>