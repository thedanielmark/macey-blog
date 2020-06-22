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
                                                Contact Us
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-4" id="supportFormContainer">
                            <!-- take attendance slide -->
                            <h6 class="font-weight-bold">
                                Get Support
                            </h6>
                            <p>
                                Please check the <a href="https://licet-xstack.mixspace.xyz/">status dashboard</a>
                                before creating a ticket. If the issue hasn't been listed, you create a ticket and
                                we will look into it for
                                you.
                            </p>

                            <form id="supportForm" class="forms-sample mt-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Type</label>
                                            <select class="form-control" id="type">
                                                <option>Technical Issues</option>
                                                <option>Bug Report</option>
                                                <option>Feedback</option>
                                                <option>Mer Mobile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Category</label>
                                            <select class="form-control" id="category">
                                                <option>I am a staff member and need assistance</option>
                                                <option>I am a student and need assistance</option>
                                                <option>I am an admin and need assistance</option>
                                                <option>I am part of the management and need assistance</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold">Subject</label>
                                    <input class="form-control" type="text" id="subject"
                                        placeholder="Brief summary of the question or issue" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea1" class="font-weight-bold">Description</label>
                                    <textarea class="form-control" id="description" rows="4"
                                        placeholder="Detailed account of the question or issue" required></textarea>
                                </div>

                                <small id="supportFormError" class="text-danger mt-2 font-weight-bold d-none">
                                    There was an error while creating your ticket. Please try again.
                                </small>

                                <div class="form-group mt-4 d-flex justify-content-end">
                                    <div id="supportFormLoader" class="d-none">
                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                        id="supportFormButton">
                                        Create Ticket
                                    </button>
                                </div>
                            </form>
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

    <script>
    // hide wrapper
    document.getElementById("wrapper").style.display = "none";
    // show loader
    document.getElementById("mainPageLoader").style.display = "block";
    </script>

    <!-- base:js -->
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
    <script src="js/support.js"></script>

    <div class="jq-toast-wrap bottom-right">
        <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;"><span
                class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 2.6s ease-in; -o-transition: width 2.6s ease-in; transition: width 2.6s ease-in; background-color: #f96868;"></span><span
                class="close-jq-toast-single">×</span>
            <h2 class="jq-toast-heading">Positioning</h2>Specify the custom position object or use one of the predefined
            ones
        </div>
    </div>

</body>

</html>