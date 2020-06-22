<!--

*********************************************************************
* Copyright (C) 2020 Daniel Mark hello@danielmarkd.com
*
* This file is part of xStack.
*
* xStack cannot be copied and/or distributed without the express
* permission of Daniel Mark.
*********************************************************************

-->

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

                    <div class="text-white about-cover pb-5">
                        <div class="p-5">
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
                                                <i class="mdi mdi-chevron-right mr-1 text-white"></i>
                                                <p class="text-light mb-0 hover-cursor">
                                                    About
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>

                        <div class="container col-md-12 col-lg-7 mt-md-3 mb-5">
                            <!-- Image and text -->

                            <div class="h2 text-center font-weight-bold">
                                About xStack
                            </div>

                            <p class="mb-2 mt-5 pl-md-3 text-center">
                                xStack is a Managed-Software-as-a-service (MSaaS) based Enterprise Resource
                                Planning application. xStack consists of various components including xPort
                                Engine, OAuth APIs, multiple web interfaces for different types of
                                users and various Android and iOS apps.
                            </p>
                            <p class="mb-2 mt-4 text-center">
                                xStack was designed and
                                built by <a href="https://danielmarkd.com" target="top" class="offwhite">Daniel
                                    Mark</a>
                                and <a href="https://www.linkedin.com/in/theflyingrahul/" target="top"
                                    class="offwhite">Pon
                                    Rahul</a>, who also currently maintain it. It was
                                made possible by the closed-source <a href="https://mixspace.xyz" target="top"
                                    class="offwhite">MixSpace project.</a>
                            </p>

                        </div>
                    </div>

                    <div class="content-wrapper">

                        <div class="container">
                            <p class="mb-0 font-weight-bold mt-4 text-justify">
                                xStack Driver v1.0.0<br>
                                &copy; <script>
                                var today = new Date();
                                var date = today.getFullYear();
                                document.write(date);
                                </script> <a href="https://mixspace.xyz/" target="_blank">MixSpace Internet
                                    Services</a>
                            </p>
                        </div>

                        <div class="container mt-5">
                            <div class="callout callout-info px-3 py-2 font-weight-bold">
                                <p>Here's a quick list of links you might need</p>
                            </div>
                            <div class="row">
                                <div class="col col-12 col-sm-4">
                                    <p class="font-weight-bold">
                                        <p><code class="p-0 font-weight-bold text-dark">Legal</code></p>
                                        <a href="terms-of-service.php" target="_blank" class="text-dark quick-link">Terms of
                                            Use</a><br>
                                        <a href="privacy-policy.php" target="_blank" class="text-dark quick-link">Privacy
                                            Statement</a><br>
                                        <a href="ipr-complaints.php" target="_blank" class="text-dark quick-link">IPR Complaints</a>
                                    </p>
                                </div>
                                <div class="col col-12 col-sm-4 mt-4 mt-md-0">
                                    <p class="font-weight-bold">
                                        <p><code class="p-0 font-weight-bold text-dark">Communicate</code></p>
                                        <a href="downloads.php" target="_blank" class="text-dark quick-link">Apps for Mobile</a><br>
                                        <a href="support.php" target="_blank" class="text-dark quick-link">Get Support</a><br>
                                        <a href="contact-us.php" target="_blank" class="text-dark quick-link">Contact Us</a>
                                    </p>
                                </div>
                                <div class="col col-12 col-sm-4 mt-4 mt-md-0">
                                    <p class="font-weight-bold">
                                        <p><code class="p-0 font-weight-bold text-dark">Policies</code></p>
                                        <a href="security-policy.php" target="_blank" class="text-dark quick-link">Security Policy</a><br>
                                        <a href="abuse-policy.php" target="_blank" class="text-dark quick-link">Abuse Policy</a><br>
                                        <a href="cookie-policy.php" target="_blank" class="text-dark quick-link">Cookie Policy</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of content wrapper -->
                    <?php
                        include "footer.php";
                    ?>
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