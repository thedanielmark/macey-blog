<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- base:css -->
    <link rel="stylesheet" href="css/jquery.toast.min.css">
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
                                                Timetable
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">
                                                Create
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sub, dept and staff slide -->
                        <div class="container col-xl-6 forms-sample mt-3">
                            <form id="extrasForm" class="forms-sample mt-3">
                                <h6 class="font-weight-bold">
                                    Choose a staff
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Staff
                                                Department</label>
                                            <select class="form-control" id="extrasFormStaffDepartment">
                                                <option>Information Technology</option>
                                                <option>Computer Science</option>
                                                <option>Electronics and Electrical</option>
                                                <option>Electronics and Communication</option>
                                                <option>Mechanical</option>
                                                <option>Science and Humanities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Staff
                                                Name</label>
                                            <select class="form-control" id="extrasFormStaffName">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="font-weight-bold mt-3">
                                    Pick a subject
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Subject
                                                Department</label>
                                            <select class="form-control" id="extrasFormSubjectDepartment">
                                                <option>Information Technology</option>
                                                <option>Computer Science</option>
                                                <option>Electronics and Electrical</option>
                                                <option>Electronics and Communication</option>
                                                <option>Mechanical</option>
                                                <option>Science and Humanities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Subject
                                                Name</label>
                                            <select class="form-control" id="extrasFormSubjectNameCode">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="font-weight-bold mt-3">
                                    Assign a class
                                </h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Department</label>
                                            <select class="form-control" id="extrasFormClassDepartment">
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
                                            <label for="exampleSelectGender" class="font-weight-bold">Semester</label>
                                            <select class="form-control" id="extrasFormSemester">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <small id="extrasFormError" class="text-danger mt-2 font-weight-bold">
                                </small>

                                <div class="form-group mt-4 d-flex justify-content-end">
                                    <div id="extrasFormLoader">
                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                        id="extrasFormNext">
                                        Assign Staff
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- sub, dept and staff slide -->
                    </div>
                    <!-- end of content wrapper -->
                    <?php include "footer.php"; ?>
                </div>
                <!-- end of main panel -->

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
    <script src="js/jquery.toast.min.js"></script>
    <script src="js/toast.js"></script>
    <script src="js/extra-staff.js"></script>

    <div class="jq-toast-wrap bottom-right">
        <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;"><span
                class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 2.6s ease-in; -o-transition: width 2.6s ease-in; transition: width 2.6s ease-in; background-color: #f96868;"></span><span
                class="close-jq-toast-single">×</span>
            <h2 class="jq-toast-heading">Done!</h2>You have successfully assigned the staff to the class.
        </div>
    </div>

</body>

</html>