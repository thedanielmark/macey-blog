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
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" />
</head>

<body>

    <div class="d-flex justify-content-center">
        <div class="bar-loader mt-5" id="mainPageLoader">
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
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center dashboard-header flex-wrap">
                                        <h5 class="mr-4 mb-0 font-weight-bold">xStack</h5>
                                        <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                            <p class="mb-0 mr-1 hover-cursor">App</p>
                                            <i class="mdi mdi-chevron-right mr-1"></i>
                                            <p class="mb-0 mr-1 hover-cursor">
                                                xStack
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1"></i>
                                            <p class="mb-0 hover-cursor">
                                                Mobile Apps
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-5 d-flex pt-3 mb-5">
                            <div class="row align-items-center">
                                <div class="col-lg-5 home-about-left flex-item">
                                    <img class="img-fluid" src="images/assets/ios.png" alt="Communicator for Android">
                                </div>
                                <div class="offset-lg-1 col-lg-5 mb-5 flex-item">
                                    <h2 class="font-weight-bold">
                                        Communicator for Android
                                    </h2>
                                    <p class="custom-para mt-5">
                                        Commuicator for Android is the Android variant of the xStack Communicator app.
                                        With this app you can perform every major operation you'd do with the web
                                        dashboard from the comfort of your mobile.
                                    </p>
                                    <a class="btn btn-primary text-uppercase mt-4 font-weight-bold btn-lg" href="downloads/app-arm64-v8a-release.apk" download="Communicator_for_Android">Download</a>
                                </div>
                                <div class="col-lg-6 home-about-right mt-5 flex-item">
                                    <h2 class="font-weight-bold">
                                        Communicator for iOS
                                    </h2>
                                    <p class="custom-para mt-5">
                                        Commuicator for iOS is the iOS variant of the xStack Communicator app.
                                        With this app you can perform every major operation you'd do with the web
                                        dashboard from the comfort of your mobile.
                                    </p>
                                    <p class="custom-para mt-3">
                                        Unfortunately, iOS does not allow installation of apps from outside of the Apple
                                        store so you'd have to perform a process called "sideloading" to install the app
                                        on your phone. You can do this by booking an appointment with us and we will get
                                        back to you at the earliest.
                                    </p>
                                    <button id="requestSideloadButton" class="btn btn-primary text-uppercase mt-4 font-weight-bold btn-lg">
                                        Request Sideload
                                    </button>
                                    <p id="downloadHelperText" class="custom-para font-weight-bold mt-4"></p>
                                </div>
                                <div class="col-lg-5 home-about-left flex-item mt-5 mt-md-0">
                                    <img class="img-fluid" src="images/assets/ios.png" alt="Communicator for iOS">
                                </div>
                            </div>
                        </div>
                        <!-- end of container -->

                    </div>

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
    <script src="js/request-sideload.js"></script>
</body>

</html>