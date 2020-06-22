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
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/wikipedia.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <style>
    h2 {
        margin-top: 50px;
        font-size: 2rem !important;
        font-weight: bold !important;
    }

    .mw-editsection {
        font-size: 1rem !important;
    }
    </style>
</head>

<body>
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
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center dashboard-header flex-wrap mb-3 mb-sm-0">
                                        <h5 class="mr-4 mb-0 font-weight-bold">Macey</h5>
                                        <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                            <p class="text-muted mb-0 mr-1 hover-cursor">Course</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 mr-1 hover-cursor">Chemistry</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">Organic</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="btn-group mr-3">
                                            <button type="button" class="btn btn-primary">02 Aug 2019</button>
                                            <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                id="dropdownMenuSplitButton1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                                                <a class="dropdown-item" href="#">Sept 2019</a>
                                                <a class="dropdown-item" href="#">Oct 2019</a>
                                                <a class="dropdown-item" href="#">Nov 2019</a>
                                            </div>
                                        </div>
                                        <button class="btn bg-white border d-none d-sm-block">Download Course</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mb-5">
                            <div id="wikiResult" class="custom-para">
                            </div>
                        </div>

                    </div>
                    <!-- content-wrapper ends -->
                    <?php include "footer.php"; ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->

            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
    </div>

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
    <script src="chatwidget.js"></script>
    <script>
    var theUrl =
        "https://en.wikipedia.org/w/api.php?action=parse&format=json&page=Enantioselective%20synthesis&prop=text" +
        "&origin=*";

    function httpGet(theUrl) {
        if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var parsedResponse = JSON.parse(xmlhttp.responseText);
                document.getElementById("wikiResult").innerHTML = parsedResponse.parse.text["*"];
            }
        }
        xmlhttp.open("GET", theUrl, false);
        xmlhttp.send();
    }

    httpGet(theUrl);
    </script>
</body>

</html>