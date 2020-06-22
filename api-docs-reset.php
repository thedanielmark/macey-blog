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
                                                API
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">
                                                Getting Started
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->

                        <div class="container mt-4 d-none" id="mainContentContainer">
                            <h3 class="font-weight-bold mt-4 d-flex justify-content-center">
                                <i class="icon-layers text-primary"></i>
                                <span class="ml-3 align-self-center">xStack API v1.0.0 Documentation</span>
                            </h3>

                            <div class="mt-5 mb-5">
                                <h4 class="font-weight-bold mt-5">Reset Password</h4>
                                <p class="mt-4 custom-para text-justify">
                                    The reset password system is only available on the web version of xStack. Resetting a users' password is a 3 step process and the details required are outlined below.
                                </p>

                                <h5 class="font-weight-bold mt-5">API 1 - forgot-password.php</h5>

                                <p class="custom-para text-justify mt-3">
                                    Simply call this API by passing in the email ID of the account whose password you want to reset. In case the email exists, the API will return the following.
                                </p>

                                <div class="callout callout-info px-4 py-2 bg-dark">
<pre class="text-white bg-dark">
mail-success
</pre>
                                </div>

<p class="custom-para text-justify mt-3">
                                    In case the email doesn't exist or the mail server or any other system inside the xStack infrastructure or over the open internet fails, the API will return the following.
                                </p>

                                <div class="callout callout-info px-4 py-2 bg-dark">
<pre class="text-white bg-dark">
mail-fail
</pre>
                                </div>

                                <p class="custom-para text-justify mt-3">
                                    If the API isn't able to write the reset token to the database, it will return the following response.
                                </p>

                                <div class="callout callout-info px-4 py-2 bg-dark">
<pre class="text-white bg-dark">
error-updating-token
</pre>

                                </div>


                                <h5 class="font-weight-bold mt-5">API 2 - reset-forgot-password.php</h5>

                                <p class="custom-para text-justify mt-3">
                                    In case of a wrong password, the API response will be a JSON object with a single value.
                                </p>

                                <div class="callout callout-info px-4 py-2 bg-dark">
<pre class="text-white bg-dark">
invalid-password
</pre>
                                </div>

                                <h5 class="font-weight-bold mt-5">Case 3 - Auth Token Error</h5>

                                <p class="custom-para text-justify mt-3">
                                    In case there is a problem updating the new authentication token into the user database, the API will return the following response.
                                </p>

                                <div class="callout callout-info px-4 py-2 bg-dark">
<pre class="text-white bg-dark">
auth-error
</pre>
                                </div>


                            </div>

                        </div>

                        <div id="contentError" class="container mt-5 h-100" style="display: block;">
                            <div class="mx-auto text-center">
                                <i class="icon-close text-danger h1"></i>
                                <h4 class="mt-5 font-weight-bold">Oh Snap!</h4>
                                <h5 class="mt-3 text-secondary">Looks like you don't have permission to access our APIs.
                                </h5>
                            </div>
                        </div>

                    </div>
                    <!-- end of content wrapper -->
                    <?php include "footer.php"; ?>
                </div>
                <!-- end of main content -->

                <!-- left-sidebar -->
                <?php
                    include "api-navbar.php";
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
    <script src="js/api-docs-auth-status.js"></script>
</body>

</html>