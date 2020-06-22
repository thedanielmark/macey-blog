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

                        <div id="cardsFormContainer">
                            <div class="container d-flex justify-content-center mt-5 mt-xl-3">
                                <!-- swiper card -->
                                <div class="blog-slider">
                                    <div class="blog-slider__wrp swiper-wrapper" id="swiperWrapper">

                                    </div>
                                    <!-- end of swiper wrapper -->
                                </div>
                                <!-- end of blog slider -->
                            </div>

                            <div class="container pr-5">
                                <small id="takeAttendanceError" class="text-danger mt-2 font-weight-bold">

                                </small>

                                <form id="takeAttendanceForm">
                                    <div class="form-group mt-5 mr-5 d-flex justify-content-end d-none">
                                        <div id="cardsSubmitLoader">
                                            <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary font-weight-bold mr-2"
                                            id="cardsEditButton" data-toggle="modal" data-target="#exampleModalCenter">
                                            List
                                        </button>

                                        <button type="submit" class="btn btn-primary font-weight-bold"
                                            id="cardsSubmitButton">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="bar-loader pt-5" id="cardsFormContainerLoader">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <div class="alert alert-fill-success d-none" role="alert" id="afterRollCall">
                            <i class="mdi mdi-alert-circle"></i>
                            You have completed your roll call. Any additional changes can be made via <a
                                href="modify-attendance-page.php" class="text-white"><u>this page.</u></a>
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
    <script src="js/swiper.min.js"></script>
    <script src="js/take-attendance.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Review your attendance list</h5>
                    <span class="mdi mdi-close-circle-outline" data-dismiss="modal"></span>
                </div>
                <div class="modal-body py-2">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name List</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody id="attendanceModalContent">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>