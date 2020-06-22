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
                            <div class="text-center">
                                <i class="icon-layers text-primary h1"></i>
                                <h3 class="font-weight-bold text-center mt-4">
                                    xStack API v1.0.0 Documentation
                                </h3>
                            </div>

                            <div class="mt-5 mb-5">
                                <h4 class="font-weight-bold mt-5">Getting Started</h4>
                                <p class="mt-4 custom-para text-justify">
                                    xStack's API exposes the entire xStack infrastructure via a standardized
                                    programmatic interface. Using xStack's API, you can do just about anything you
                                    can do on xStack's various front-end platforms.
                                </p>

                                <p class="custom-para text-justify mt-4">
                                    The xStack API is a RESTful API based on HTTPS requests and JSON responses. If
                                    you are registered with xStack, you can obtain your API key from the superuser who
                                    manages your local xStack installation.
                                </p>
                            </div>

                            <div class="mt-5 mb-5">
                                <h4 class="font-weight-bold mt-5">What is xStack?</h4>
                                <p class="mt-4 custom-para text-justify">
                                    xStack is a Managed-Software-as-a-service (MSaaS) based Enterprise Resource Planning
                                    application. xStack consists of various components including xPort Engine, OAuth
                                    APIs, multiple web interfaces for different types of users and various Android and
                                    iOS apps.
                                </p>

                                <p class="mt-4 custom-para text-justify">
                                    xStack was designed and built by <a href="https://danielmarkd.com"
                                        target="top">Daniel Mark</a> and <a href="">Pon Rahul</a>, who also currently
                                    maintain it. It was made possible by the closed-source <a
                                        href="https://mixspace.xyz/">MixSpace project.</a>
                                </p>
                            </div>

                            <div class="mt-5 mb-5">
                                <h4 class="font-weight-bold mt-5">Audience for APIs</h4>
                                <p class="mt-4 custom-para text-justify">
                                    Cloudflare offers public APIs with three audiences in mind.
                                </p>

                                <ul>
                                    <li>Cloudflare customers</li>
                                    <li>Cloudflare partners</li>
                                    <li>Developers</li>
                                </ul>

                                <p class="custom-para text-justify mt-4">
                                    <i>Customers:</i> Individuals and organizations all over the world choose Cloudflare
                                    to
                                    protect and accelerate their web applications. Most customers manage their settings
                                    in the web dashboard, built using these APIs. Virtually anything you can do in the
                                    customer dashboard may be done via API. Example: purging the Cloudflare edge cache
                                    for a single file when it's updated on the origin server.
                                </p>

                                <p class="custom-para text-justify mt-4">
                                    <i>Partners:</i> Many organizations make using Cloudflare a seamless option for
                                    improving their customers' performance and security. These APIs make that easier to
                                    do at scale. Example: a Cloudflare Certified Hosting Partner may use APIs to toggle
                                    basic security mode inside a hosting control panel.
                                </p>

                                <p class="custom-para text-justify mt-4">
                                    <i>Developers:</i> Developers all over the world create useful applications which
                                    tie into Cloudflare services. These applications may include plugins and extensions
                                    to popular content management systems, apps that are offered in the Cloudflare Apps
                                    marketplace, runbooks for specific deployment systems, and many others.
                                </p>
                            </div>

                            <div class="mt-5 mb-5">
                                <h4 class="font-weight-bold mt-5">Do's and Don'ts</h4>
                                <h5 class="font-weight-bold mt-5">What can you build with Cloudflare APIs?</h5>
                                <p class="mt-4 custom-para text-justify">
                                    Anything that's useful and follows the guidelines presented here.
                                </p>

                                <h5 class="font-weight-bold mt-5">What should you avoid doing with Cloudflare APIs?</h5>

                                <p class="custom-para text-justify mt-4">
                                    Do not do any of the following:
                                </p>

                                <ul>
                                    <li>Abuse Cloudflare systems or customers</li>
                                    <li>Misuse Cloudflare trademarks</li>
                                    <li>Misrepresent Cloudflare services as your own</li>
                                </ul>

                                <p class="custom-para text-justify mt-4">
                                    <i>Abuse:</i> Follow all guidelines, including the rate limits defined below. Your ability
                                    to use the Cloudflare APIs may be terminated, temporarily or permanently, if our
                                    systems are abused. Similarly, anything in an application which goes against the
                                    goal of making Cloudflare more useful to Cloudflare customers or attempts to
                                    mistreat customers or their data will be grounds for termination.
                                </p>

                                <p class="custom-para text-justify mt-4">
                                    <i>Trademarks:</i> Cloudflare has several registered trademarks. Details on how and when
                                    you may use Cloudflare trademarks are found at https://www.cloudflare.com/trademark,
                                    with links to specifics on logo use and spelling. Please review carefully.
                                </p>

                                <p class="custom-para text-justify mt-4">
                                    <i>Misrepresentation:</i> Draw a clear line between the benefits you provide in your
                                    application and those benefits of the Cloudflare service that you enable via API.
                                    The APIs are not intended for "white labeling" or reselling Cloudflare services as
                                    your own. Nothing in your service or application should create a false sense of
                                    endorsement, sponsorship, or association with Cloudflare. You may sell your own
                                    application or service which utilizes the Cloudflare APIs, but may not sell
                                    Cloudflare services to customers without a commercial agreement with Cloudflare.
                                </p>

                                <p class="custom-para text-justify mt-4">
                                    The full Cloudflare Terms of Use are found at <a
                                        href="terms-of-service.php">here.</a>
                                </p>
                            </div>

                            <div class="mt-5 mb-5">
                                <h4 class="font-weight-bold mt-5">Do's and Don'ts</h4>
                                <h5 class="font-weight-bold mt-5">What can you build with Cloudflare APIs?</h5>
                                <p class="mt-4 custom-para text-justify">
                                    Anything that's useful and follows the guidelines presented here.
                                </p>

                                <h5 class="font-weight-bold mt-5">What should you avoid doing with Cloudflare APIs?</h5>

                                <p class="custom-para text-justify mt-4">
                                    Do not do any of the following:
                                </p>

                                <ul>
                                    <li>Abuse Cloudflare systems or customers</li>
                                    <li>Misuse Cloudflare trademarks</li>
                                    <li>Misrepresent Cloudflare services as your own</li>
                                </ul>
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