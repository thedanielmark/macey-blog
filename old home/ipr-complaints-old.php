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
                    <div class="icon-card-dark p-5">
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
                                                About
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-5 mb-5">
                            <h3 class="font-weight-bold text-center">IPR Complaints</h3>
                        </div>
                    </div>

                    <div class="content-wrapper">

                        <!-- end of row -->
                        <div class="container pt-5 pb-5">

                            <h4 class="font-weight-bold text-center mt-5">Complaint Procedure</h4>

                            <p class="custom-para text-center mt-4">
                                If you believe that content on any of the xStack services has violated your copyright or
                                other intellectual property right, please write to our Designated Agent providing the
                                following information:
                            </p>

                            <ul class="list-unstyled">
                                <li class="media mt-3">
                                    <i class="icon-check text-success align-self-center mr-3"></i>
                                    <div class="media-body custom-list">
                                        An electronic or physical signature of the person authorized to act on behalf of
                                        the owner of the copyright or other intellectual property right alleged to be
                                        infringed;
                                    </div>
                                </li>

                                <li class="media mt-3">
                                    <i class="icon-check text-success align-self-center mr-3"></i>
                                    <div class="media-body custom-list">
                                        A description of the copyrighted work or other intellectual property that you
                                        claim to have been infringed;
                                    </div>
                                </li>

                                <li class="media mt-3">
                                    <i class="icon-check text-success align-self-center mr-3"></i>
                                    <div class="media-body custom-list">
                                        Identification of the material that you claim to be infringing including
                                        information regarding its location that would enable it to be located and if
                                        possible the URL of such infringing material;
                                    </div>
                                </li>

                                <li class="media mt-3">
                                    <i class="icon-check text-success align-self-center mr-3"></i>
                                    <div class="media-body custom-list">
                                        Information that would enable us to contact you, such as your address, telephone
                                        number, and email address (if available);
                                    </div>
                                </li>

                                <li class="media mt-3">
                                    <i class="icon-check text-success align-self-center mr-3"></i>
                                    <div class="media-body custom-list">
                                        A statement by you to the effect that you believe in good faith that the use of
                                        the infringing material in the manner complained of is not authorized by the
                                        copyright or intellectual property owner, its agent, or the law;
                                    </div>
                                </li>

                                <li class="media mt-3">
                                    <i class="icon-check text-success align-self-center mr-3"></i>
                                    <div class="media-body custom-list">
                                        A statement by you, under penalty of perjury, that the above information
                                        contained in your communication is accurate and that you are authorized to act
                                        on behalf of the owner of copyright or other intellectual property right.
                                    </div>
                                </li>
                            </ul>

                            <p class="custom-para text-justify mt-4">
                                Your notice with the above information to be effective should be sent to our Designated
                                Agent for notice of claims of infringement of copyright and intellectual property rights
                                at the following address.
                            </p>

                            <h4 class="font-weight-bold mt-5">Designated Contacts (IPR complaints)</h4>
                            <p class="custom-para text-justify mt-4">
                                <a href="mailto:xstack@mixspace.xyz">xstack@mixspace.xyz</a><br>
                                <a href="mailto:admin@mixspace.xyz">admin@mixspace.xyz</a><br>
                                <a href="mailto:hello@danielmarkd.com">hello@danielmarkd.com</a>
                            </p>

                            <p class="custom-para text-justify mt-5">
                                Please take note that if you knowingly misrepresent that any material or activity is
                                infringing, you may be subject to liability under Section 512(f) of the Copyright Act.
                            </p>
                        </div>
                        <!-- end of container -->
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
</body>

</html>