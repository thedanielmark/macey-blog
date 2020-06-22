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
                                                Timetable
                                            </p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">
                                                Create
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container col-xl-6">
                            <div class="mt-4">
                                <div id="studentListCarousel" class="carousel slide" data-ride="carousel"
                                    data-interval="false" data-touch="false">
                                    <div class="carousel-inner">
                                        <!-- dept and sem slide -->
                                        <div class="carousel-item active">
                                            <h6 class="font-weight-bold">
                                                Create timetable for staff
                                            </h6>
                                            <form id="deptSemForm" class="forms-sample mt-3">

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Department</label>
                                                            <select class="form-control" id="department">
                                                                <option>Information Technology</option>
                                                                <option>Computer Science</option>
                                                                <option>Electronics and Electrical</option>
                                                                <option>Electronics and Communucation</option>
                                                                <option>Mechanical A</option>
                                                                <option>Mechanical B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Semester</label>
                                                            <select class="form-control" id="semester">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small id="deptSemFormError" class="text-danger mt-2 font-weight-bold">

                                                </small>

                                                <div class="form-group mt-4 d-flex justify-content-end">
                                                    <div id="deptSemFormLoader">
                                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                                        id="deptSemFormNext">
                                                        Next
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end of dept and sem slide -->
                                        <!-- student list slide -->
                                        <div class="carousel-item">
                                            <h6 class="font-weight-bold">
                                                Select students who would take this class
                                            </h6>
                                            <form id="studentListForm" class="forms-sample mt-3">

                                                <div class="btn-toolbar btn-group-toggle" data-toggle="buttons"
                                                    id="studentsList">

                                                </div>

                                                <!-- end of flex-wrap -->
                                                <small id="studentListFormError"
                                                    class="text-danger mt-2 font-weight-bold">
                                                    There was an error while assigning the students to the class. Please
                                                    try
                                                    again.
                                                </small>

                                                <div class="form-group mt-4 d-flex justify-content-end">
                                                    <div id="studentListFormLoader">
                                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                                        id="studentListFormNext">
                                                        Next
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end of student list slide -->
                                        <!-- sub, dept and staff slide -->
                                        <div class="carousel-item" class="forms-sample mt-3">
                                            <form id="subDeptStaffForm" class="forms-sample mt-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Staff
                                                                Department</label>
                                                            <select class="form-control"
                                                                id="subDeptStaffFormStaffDepartment">
                                                                <option>Information Technology</option>
                                                                <option>Computer Science</option>
                                                                <option>Electronics and Electrical</option>
                                                                <option>Electronics and Communication</option>
                                                                <option>Mechanical</option>
                                                                <option>Science and Humanities</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Staff
                                                                Name</label>
                                                            <select class="form-control" id="subDeptStaffFormStaffName">

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Subject Department</label>
                                                            <select class="form-control"
                                                                id="subDeptStaffFormSubjectDepartment">
                                                                <option>Information Technology</option>
                                                                <option>Computer Science</option>
                                                                <option>Electronics and Electrical</option>
                                                                <option>Electronics and Communication</option>
                                                                <option>Mechanical</option>
                                                                <option>Science and Humanities</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender"
                                                                class="font-weight-bold">Subject Name</label>
                                                            <select class="form-control"
                                                                id="subDeptStaffFormSubjectNameCode">

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small id="subDeptStaffFormError"
                                                    class="text-danger mt-2 font-weight-bold">
                                                    There was an error while creating the subject. Please try again.
                                                </small>

                                                
                                                <div class="form-group mt-4 d-flex justify-content-end">
                                                    <div id="subDeptStaffFormLoader">
                                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                                        id="subDeptStaffFormNext">
                                                        Next
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- sub, dept and staff slide -->
                                        <!-- hours selector slide -->
                                        <div class="carousel-item">
                                            <form id="hourSelectorForm">
                                                <div class="form-group" id="timetableDiv">
                                                    <table class="table table-borderless table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"><b>Days</b></th>
                                                                <th scope="col">
                                                                    <b>Hours</b>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Monday</th>
                                                                <td>
                                                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                                        data-toggle="buttons" id="day1">
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon1" value="mon1"> 1
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon2" value="mon2"> 2
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon3" value="mon3"> 3
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon4" value="mon4">
                                                                            4
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon5" value="mon5"> 5
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon6" value="mon6"> 6
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon7" value="mon7">
                                                                            7
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="mon8" value="mon8"> 8
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Tuesday</th>
                                                                <td>
                                                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                                        data-toggle="buttons" id="day2">
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue1" value="tue1">
                                                                            1
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue2" value="tue2"> 2
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue3" value="tue3"> 3
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue4" value="tue4">
                                                                            4
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue5" value="tue5"> 5
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue6" value="tue6"> 6
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue7" value="tue7">
                                                                            7
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="tue8" value="tue8"> 8
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Wednesday</th>
                                                                <td>
                                                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                                        data-toggle="buttons" id="day3">
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed1" value="wed1">
                                                                            1
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed2" value="wed2"> 2
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed3" value="wed3"> 3
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed4" value="wed4">
                                                                            4
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed5" value="wed5"> 5
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed6" value="wed6"> 6
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed7" value="wed7">
                                                                            7
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="wed8" value="wed8"> 8
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Thursday</th>
                                                                <td>
                                                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                                        data-toggle="buttons" id="day4">
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu1" value="thu1">
                                                                            1
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu2" value="thu2"> 2
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu3" value="thu3"> 3
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu4" value="thu4">
                                                                            4
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu5" value="thu5"> 5
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu6" value="thu6"> 6
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu7" value="thu7">
                                                                            7
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="thu8" value="thu8"> 8
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Friday</th>
                                                                <td>
                                                                    <div class="btn-group btn-group-toggle btn-group-sm d-flex justify-content-center"
                                                                        data-toggle="buttons" id="day5">
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri1" value="fri1">
                                                                            1
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri2" value="fri2"> 2
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri3" value="fri3"> 3
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri4" value="fri4">
                                                                            4
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri5" value="fri5"> 5
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri6" value="fri6"> 6
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri7" value="fri7">
                                                                            7
                                                                        </label>
                                                                        <label class="btn btn-outline-success">
                                                                            <input type="checkbox" name="options"
                                                                                id="fri8" value="fri8"> 8
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <small id="hourSelectorFormError"
                                                    class="text-danger mt-2 font-weight-bold">
                                                </small>

                                                <div class="form-group mt-4 d-flex justify-content-end">
                                                    <div id="hourSelectorFormLoader">
                                                        <div class="d-flex align-items-end jumping-dots-loader mr-3">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary font-weight-bold"
                                                        id="hourSelectorFormNext">
                                                        Assign Subject
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end of hours selector slide -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end of content wrapper -->
                    <?php include "footer.php"; ?>
                </div>
                <!-- end of mail panel -->

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
    <script src="js/jquery.js"></script>
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
    <script src="js/assign-subject.js"></script>

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