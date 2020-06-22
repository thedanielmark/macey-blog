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
                    <div class="about-cover-big text-white p-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center dashboard-header flex-wrap">
                                        <h5 class="mr-4 mb-0 font-weight-bold">xStack</h5>
                                        <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                            <p class="text-light mb-0 mr-1 hover-cursor">App</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-light"></i>
                                            <p class="text-light mb-0 mr-1 hover-cursor">
                                                xStack
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-light mb-0 hover-cursor">
                                                Mobile Apps
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-5 d-flex pt-3 mb-5">
                            <div class="col-12 col-md-6">
                                <img src="images/assets/phone.png" alt="">
                            </div>

                            <div class="col-12 col-md-6">
                                <h2 class="mt-3 font-weight-bold">xStack Communicator</h2>

                                <p class="text-justify text-white mt-4">
                                    xStack provides users with Communicator apps to connect to its system and perform
                                    various functions depending on their access levels.
                                </p>

                                <div class="accordion mt-5" id="accordion-2" role="tablist"
                                    style="background:transparent;box-shadow:none;">
                                    <div class="card bg-custom-dark px-4 accordion-card-custom">
                                        <div class="card-header" role="tab" id="heading-4">
                                            <h6 class="mb-0">
                                                <a data-toggle="collapse" href="#collapse-4" aria-expanded="false"
                                                    aria-controls="collapse-4" class="collapsed">
                                                    Communicator for Staff
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-4" class="collapse" role="tabpanel"
                                            aria-labelledby="heading-4" data-parent="#accordion-2" style="">
                                            <div class="card-body">
                                                <p class="mb-0">You can pay for the product you have purchased using
                                                    credit cards, debit cards, or via online banking. We also provide
                                                    cash-on-delivery services for most of our products. You can also use
                                                    your account wallet for payment.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-custom-dark px-4 accordion-card-custom">
                                        <div class="card-header" role="tab" id="heading-5">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-5"
                                                    aria-expanded="false" aria-controls="collapse-5">
                                                    Communicator for HODs
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-5" class="collapse" role="tabpanel"
                                            aria-labelledby="heading-5" data-parent="#accordion-2" style="">
                                            <div class="card-body">
                                                <p>If while signing in to your account you see an error message, you can
                                                    do the following</p>
                                                <ol class="pl-3">
                                                    <li>Check your network connection and try again</li>
                                                    <li>Make sure your account credentials are correct while signing in
                                                    </li>
                                                    <li>Check whether your account is accessible in your region</li>
                                                </ol>
                                                <br>
                                                <i class="mdi mdi-alert-octagon mr-2"></i>If the problem persists, you
                                                can contact our support.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-custom-dark px-4 accordion-card-custom">
                                        <div class="card-header" role="tab" id="heading-6">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-6"
                                                    aria-expanded="false" aria-controls="collapse-6">
                                                    Communicator for Management
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-6" class="collapse" role="tabpanel"
                                            aria-labelledby="heading-6" data-parent="#accordion-2" style="">
                                            <div class="card-body">
                                                <p class="mb-0">If you wish to deactivate your account, you can go to
                                                    the Settings page of your account. Click on Account Settings and
                                                    then click on Deactivate.
                                                    You can join again as and when you wish.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-custom-dark px-4 accordion-card-custom">
                                        <div class="card-header" role="tab" id="heading-7">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-7"
                                                    aria-expanded="false" aria-controls="collapse-7">
                                                    Communicator for Admins
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-7" class="collapse" role="tabpanel"
                                            aria-labelledby="heading-6" data-parent="#accordion-2" style="">
                                            <div class="card-body">
                                                <p class="mb-0">If you wish to deactivate your account, you can go to
                                                    the Settings page of your account. Click on Account Settings and
                                                    then click on Deactivate.
                                                    You can join again as and when you wish.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-custom-dark px-4 accordion-card-custom">
                                        <div class="card-header" role="tab" id="heading-8">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-8"
                                                    aria-expanded="false" aria-controls="collapse-8">
                                                    Looking for the iOS app?
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-8" class="collapse" role="tabpanel"
                                            aria-labelledby="heading-8" data-parent="#accordion-2" style="">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Apple does not allow iPhones to install apps from sources other than
                                                    its App Store, hence we require you to go through a process known as
                                                    "sideloading" wherein we physically connect your phone to one of our
                                                    workstations and install the app for you. If you're looking to
                                                    proceed with this option, please fill in the form and we'll get back
                                                    to you at the earliest.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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
</body>

</html>