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
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <div class="sidebar-profile">
                        <div class="d-flex align-items-center justify-content-between">
                            <img src="../../images/faces/face5.jpg" alt="profile">
                            <div class="profile-desc">
                                <p class="name mb-0">Louis Scott</p>
                                <p class="designation mb-0">Sales Manager</p>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="test.php">
                                <i class="mdi mdi-shield-half-full menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/widgets/widgets.html">
                                <i class="mdi mdi-puzzle menu-icon"></i>
                                <span class="menu-title">Widgets</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                aria-controls="ui-basic">
                                <i class="mdi mdi-checkbox-blank-circle-outline menu-icon"></i>
                                <span class="menu-title">UI Elements</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="test2.php">Accordions</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/buttons.html">Buttons</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/badges.html">Badges</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/modals.html">Modals</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/progress.html">Progress bar</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/pagination.html">Pagination</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/tabs.html">Tabs</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/typography.html">Typography</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/tooltips.html">Tooltips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                                aria-controls="ui-advanced">
                                <i class="mdi mdi-palette menu-icon"></i>
                                <span class="menu-title">Advanced UI</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-advanced">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/dragula.html">Dragula</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/clipboard.html">Clipboard</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/context-menu.html">Context menu</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/slider.html">Sliders</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/carousel.html">Carousel</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/colcade.html">Colcade</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/ui-features/loaders.html">Loaders</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                                aria-controls="form-elements">
                                <i class="mdi mdi-view-headline menu-icon"></i>
                                <span class="menu-title">Form elements</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="form-elements">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link"
                                            href="pages/forms/basic_elements.html">Basic Elements</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="pages/forms/validation.html">Validation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false"
                                aria-controls="editors">
                                <i class="mdi mdi-pencil menu-icon"></i>
                                <span class="menu-title">Editors</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="editors">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text
                                            editors</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code
                                            editors</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                                aria-controls="charts">
                                <i class="mdi mdi-poll menu-icon"></i>
                                <span class="menu-title">Charts</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="charts">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/charts/chartjs.html">ChartJs</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/charts/flot-chart.html">Flot</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/charts/google-charts.html">Google charts</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/charts/sparkline.html">Sparkline js</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/charts/chartist.html">Chartists</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/charts/justGage.html">JustGage</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false"
                                aria-controls="tables">
                                <i class="mdi mdi-view-list menu-icon"></i>
                                <span class="menu-title">Tables</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic
                                            table</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data
                                            table</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/tables/js-grid.html">Js-grid</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/tables/sortable-table.html">Sortable table</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/popups.html">
                                <i class="mdi mdi-comment-alert menu-icon"></i>
                                <span class="menu-title">Popups</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/notifications.html">
                                <i class="mdi mdi-bell menu-icon"></i>
                                <span class="menu-title">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false"
                                aria-controls="icons">
                                <i class="mdi mdi-emoticon menu-icon"></i>
                                <span class="menu-title">Icons</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="icons">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag
                                            icons</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font
                                            Awesome</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify
                                            icons</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false"
                                aria-controls="maps">
                                <i class="mdi mdi-map menu-icon"></i>
                                <span class="menu-title">Maps</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector
                                            Map</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google
                                            Map</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                                aria-controls="auth">
                                <i class="mdi mdi-account-circle menu-icon"></i>
                                <span class="menu-title">User Pages</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="auth">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">
                                            Register </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html">
                                            Register 2 </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                                            Lockscreen </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false"
                                aria-controls="error">
                                <i class="mdi mdi-alert-circle menu-icon"></i>
                                <span class="menu-title">Error pages</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="error">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
                                aria-controls="general-pages">
                                <i class="mdi mdi-file menu-icon"></i>
                                <span class="menu-title">General Pages</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="general-pages">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">
                                            Blank Page </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News
                                            grid </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html">
                                            Timeline </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html">
                                            Search Results </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html">
                                            Portfolio </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false"
                                aria-controls="e-commerce">
                                <i class="mdi mdi-basket menu-icon"></i>
                                <span class="menu-title">E-commerce</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="e-commerce">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html">
                                            Pricing Table </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/apps/email.html">
                                <i class="mdi mdi-email menu-icon"></i>
                                <span class="menu-title">E-mail</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/apps/calendar.html">
                                <i class="mdi mdi-calendar-range menu-icon"></i>
                                <span class="menu-title">Calendar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/apps/todo.html">
                                <i class="mdi mdi-playlist-check menu-icon"></i>
                                <span class="menu-title">Todo List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/apps/gallery.html">
                                <i class="mdi mdi-image menu-icon"></i>
                                <span class="menu-title">Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                <span class="menu-title">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </nav>

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
                                                Settings
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">
                                                Change password
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of row -->
                        <div class="container col-xl-6 mt-md-4">
                            <h6 class="font-weight-bold">
                                Change your password
                            </h6>
                            <form id="changePasswordForm" class="forms-sample mt-3">
                                <div class="form-group">
                                    <label for="exampleSelectGender" class="font-weight-bold">Old Password</label>
                                    <input type="password" class="form-control" id="oldPassword"
                                        placeholder="Old password" required>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">New
                                                Password</label>
                                            <input type="password" class="form-control" id="newPassword"
                                                placeholder="New password" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender" class="font-weight-bold">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="confirmPassword"
                                                placeholder="Confirm password" required>
                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger font-weight-bold" id="passwordError">Passwords do not
                                    match.</small>

                                <div class="form-group mt-4 d-flex justify-content-end">
                                    <div id="formLoader">
                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="changePasswordButton">
                                        Change Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end of content wrapper -->
                    <?php include "footer.php"; ?>
                </div>
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
    <script src="js/change-password.js"></script>
</body>

</html>