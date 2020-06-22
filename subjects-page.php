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
                                                Subjects
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

                        <div class="container col-xl-6 mt-4">
                            <h6 class="font-weight-bold">
                                Create subjects for your department
                            </h6>
                            <form id="addSubjectForm" class="forms-sample mt-3">

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Department</label>
                                            <select class="form-control" id="department" required>
                                                <option>Information Technology</option>
                                                <option>Computer Science</option>
                                                <option>Electronics and Electrical</option>
                                                <option>Electronics and Communucation</option>
                                                <option>Mechanical</option>
                                                <option>Science and Humanities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Semester</label>
                                            <select class="form-control" id="semester" required>
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

                                <div class="form-group">
                                    <label for="exampleInputUsername1" class="font-weight-bold">Subject Name</label>
                                    <input type="text" class="form-control text-capitalize" id="subject_name"
                                        placeholder="Subject Name" required>
                                </div>

                                <div class="row">
                                    <div class="col col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1" class="font-weight-bold">Subject
                                                Code</label>
                                            <input type="text" class="form-control text-uppercase" id="subject_code"
                                                placeholder="Subject Code" required>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1" class="font-weight-bold">Subject
                                                    Abbreviation</label>
                                                <input type="text" class="form-control text-uppercase"
                                                    id="subject_abbr" placeholder="Subject Abbreviation" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-12 col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1" class="font-weight-bold">Subject
                                                    Type</label>
                                                <select class="form-control" id="subject_type" required>
                                                    <option>Regular</option>
                                                    <option>Open Elective</option>
                                                    <option>Professional Elective</option>
                                                    <option>Laboratory Batch A</option>
                                                    <option>Laboratory Batch B</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <small id="subjectError" class="text-danger mt-2 font-weight-bold">
                                    There was an error while creating the subject. Please try again.
                                </small>

                                <div class="form-group mt-4 d-flex justify-content-end">
                                    <div id="formLoader">
                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                        id="addSubjectButton">
                                        Create Subject
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- end of content wrapper -->
                    <?php include "footer.php"; ?>
                </div>
                <!-- end of mail panel -->

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
    <script src="js/create-subject.js"></script>
</body>

</html>