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
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="#"><img src="images/licet-logo.png" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="#"><img src="images/licet-logo.png" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-left">
                        <li class="nav-item d-none d-lg-block">
                            <a href="#" class="nav-link">
                                <p>Sales</p>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a href="#" class="nav-link">
                                <p>Purchases</p>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a href="#" class="nav-link">
                                <p>My status</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                                id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline mx-0"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-information mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-account-box mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                                id="messageDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline mx-0"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="images/profile-pictures/311100205001.jpg" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            The meeting is cancelled
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="images/profile-pictures/311100205003.png" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            New product launch
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="images/profile-pictures/default.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            Upcoming board meeting
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img id="current-user-profile-picture" alt="profile-pic" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a href="settings.html" class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" onclick="logout()">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-flex">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div id="right-sidebar" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                                aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                                aria-controls="chats-section">CHATS</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="setting-content">
                        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                            aria-labelledby="todo-section">
                            <div class="add-items d-flex px-3 mb-0">
                                <form class="form w-100">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                        <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                            id="add-task">Add</button>
                                    </div>
                                </form>
                            </div>
                            <div class="list-wrapper px-3">
                                <ul class="d-flex flex-column-reverse todo-list">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Team review meeting at 3.00 PM
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Prepare for presentation
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Resolve all the low priority tickets due today
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Schedule meeting for next week
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Project review
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="events py-4 border-bottom px-3">
                                <div class="wrapper d-flex mb-2">
                                    <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                                    <span>Feb 11 2018</span>
                                </div>
                                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                                <p class="text-gray mb-0">build a js based app</p>
                            </div>
                            <div class="events pt-4 px-3">
                                <div class="wrapper d-flex mb-2">
                                    <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                                    <span>Feb 7 2018</span>
                                </div>
                                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                                <p class="text-gray mb-0 ">Call Sarah Graves</p>
                            </div>
                        </div>
                        <!-- To do section tab ends -->
                        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                            <div class="d-flex align-items-center justify-content-between border-bottom">
                                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                                <small
                                    class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                    All</small>
                            </div>
                            <ul class="chat-list">
                                <li class="list active">
                                    <div class="profile"><img src="images/profile-pictures/311100205001.jpg"
                                            alt="image"><span class="online"></span></div>
                                    <div class="info">
                                        <p>Thomas Douglas</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">19 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/profile-pictures/311100205003.png"
                                            alt="image"><span class="offline"></span></div>
                                    <div class="info">
                                        <div class="wrapper d-flex">
                                            <p>Catherine</p>
                                        </div>
                                        <p>Away</p>
                                    </div>
                                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                    <small class="text-muted my-auto">23 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/profile-pictures/default.jpg"
                                            alt="image"><span class="online"></span></div>
                                    <div class="info">
                                        <p>Daniel Russell</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">14 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/profile-pictures/311100205001.jpg"
                                            alt="image"><span class="offline"></span></div>
                                    <div class="info">
                                        <p>James Richardson</p>
                                        <p>Away</p>
                                    </div>
                                    <small class="text-muted my-auto">2 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/profile-pictures/311100205003.png"
                                            alt="image"><span class="online"></span></div>
                                    <div class="info">
                                        <p>Madeline Kennedy</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">5 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/profile-pictures/default.jpg"
                                            alt="image"><span class="online"></span></div>
                                    <div class="info">
                                        <p>Sarah Graves</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">47 min</small>
                                </li>
                            </ul>
                        </div>
                        <!-- chat tab ends -->
                    </div>
                </div>
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <div class="sidebar-profile">
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- <img id="current-user-profile-picture" alt="profile"> -->
                            <div class="profile-desc">
                                <p class="name mb-0" id="current-user-full-name-container"></p>
                                <p class="designation mb-0" id="current-user-department-container"></p>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-shield-home-outline menu-icon"></i>
                                <span class="menu-title">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                aria-controls="ui-basic">
                                <i class="mdi mdi-playlist-edit menu-icon"></i>
                                <span class="menu-title">Attendance</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="take-attendance-page.html">Take</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="modify-attendance-page.html">Modify</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="on-duty-page.html">On-Duty</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view-attendance-page.html">
                                <i class="mdi mdi-calendar-range menu-icon"></i>
                                <span class="menu-title">Views</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="export-page.php">
                                <i class="mdi mdi-file-excel menu-icon"></i>
                                <span class="menu-title">Export</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.html">
                                <i class="mdi mdi-pencil menu-icon"></i>
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">
                                <i class="mdi mdi-information-outline menu-icon"></i>
                                <span class="menu-title">About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="logout()">
                                <i class="mdi mdi-logout menu-icon"></i>
                                <span class="menu-title">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center dashboard-header flex-wrap mb-3 mb-sm-0">
                                        <h5 class="mr-4 mb-0 font-weight-bold">Dashboard</h5>
                                        <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                            <p class="text-muted mb-0 mr-1 hover-cursor">App</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 mr-1 hover-cursor">xStack</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">Analytics</p>
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
                                        <button class="btn bg-white border d-none d-sm-block">Download Report</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
                                <div class="card icon-card-primary">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2">
                                                <i class="mdi mdi-star-circle"></i>
                                            </div>
                                            <p class="font-weight-medium mb-0">Sales</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <h3 class="font-weight-normal mb-0 mr-2">59467</h3>
                                            <div class="badge badge-outline-light badge-pill mt-md-2 mt-xl-0">
                                                <div class="d-flex align-items-baseline">
                                                    <span class="mr-2">High</span>
                                                    <span class="mb-0">311</span>
                                                    <span class="mdi mdi-arrow-up"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="font-weight-medium d-block mt-2">Total for this month</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
                                <div class="card icon-card-success">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2">
                                                <i class="mdi mdi-truck"></i>
                                            </div>
                                            <p class="font-weight-medium mb-0">Returns</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <h3 class="font-weight-normal mb-0 mr-2">28085</h3>
                                            <div class="badge badge-outline-light badge-pill mt-md-2 mt-xl-0">
                                                <div class="d-flex align-items-baseline">
                                                    <span class="mr-2">High</span>
                                                    <span class="mb-0">2.98</span>
                                                    <span class="mdi mdi-arrow-up"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="font-weight-medium d-block mt-2">Total for this month</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
                                <div class="card icon-card-info">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2">
                                                <i class="mdi mdi-basket"></i>
                                            </div>
                                            <p class="font-weight-medium mb-0">Purchases</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <h3 class="font-weight-normal mb-0 mr-2">39645</h3>
                                            <div class="badge badge-outline-light badge-pill mt-md-2 mt-xl-0">
                                                <div class="d-flex align-items-baseline">
                                                    <span class="mr-2">Low</span>
                                                    <span class="mb-0">0.21</span>
                                                    <span class="mdi mdi-arrow-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="font-weight-medium d-block mt-2">Total for this month</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
                                <div class="card icon-card-dark">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon mb-0 mb-md-2 mb-xl-0 mr-2">
                                                <i class="mdi mdi-package-down"></i>
                                            </div>
                                            <p class="font-weight-medium mb-0">Downloads</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 flex-wrap">
                                            <h3 class="font-weight-normal mb-0 mr-2">44148</h3>
                                            <div class="badge badge-outline-light badge-pill mt-md-2 mt-xl-0">
                                                <div class="d-flex align-items-baseline">
                                                    <span class="mr-2">Low</span>
                                                    <span class="mb-0">1.12</span>
                                                    <span class="mdi mdi-arrow-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="font-weight-medium d-block mt-2">Total for this month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title">Customers</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton1"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton1">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-5">Total customers this month</p>
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <h1 class="font-weight-bold">92556</h1>
                                            <div class="d-flex align-items-baseline flex-wrap justify-content-center">
                                                <h5 class="mb-0 font-weight-normal text-success">1.35</h5>
                                                <i class="mdi mdi-arrow-up text-success mr-1"></i>
                                                <h5 class="mb-0 mt-0 mt-md-2 mt-xl-0 font-weight-normal">More than last
                                                    month</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas height="110" id="customers-chart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title">Conversion</p>
                                            <div class="dropdown dropleft card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton2">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-5">Total conversion this month</p>
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <h1 class="font-weight-bold">53812</h1>
                                            <div class="d-flex align-items-baseline flex-wrap justify-content-center">
                                                <h5 class="mb-0 font-weight-normal text-danger">0.17</h5>
                                                <i class="mdi mdi-arrow-down text-danger mr-1"></i>
                                                <h5 class="mb-0 mt-0 mt-md-2 mt-xl-0 font-weight-normal">Less than last
                                                    month</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas height="110" id="conversion-chart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title">Revenue</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton3"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton3">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-5">Total revenue this month</p>
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <h1 class="font-weight-bold">40008</h1>
                                            <div class="d-flex align-items-baseline flex-wrap justify-content-center">
                                                <h5 class="mb-0 font-weight-normal text-success">0.06</h5>
                                                <i class="mdi mdi-arrow-up text-success mr-1"></i>
                                                <h5 class="mb-0 mt-0 mt-md-2 mt-xl-0 font-weight-normal">Less than last
                                                    month</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas height="110" id="revenue-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title flex-grow">Revenue for Last 30 days</p>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown dropright card-menu-dropdown">
                                                    <button class="btn" type="button" id="cardMenuButton4"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="cardMenuButton4">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-start flex-wrap ">
                                            <p class="text-muted mb-0">Sales Performance for Online revenue of past 30
                                                days
                                            </p>
                                            <div class="online-revenue-chart-legend mt-2 mt-sm-0 mt-md-2 mt-xl-0 mr-1"
                                                id="online-revenue-legend"></div>
                                        </div>
                                        <canvas id="online-revenue-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title flex-grow">all online sales</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton5"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton5">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted">The total number of sessions within the date range. It is
                                            the
                                            period time a user is actively engaged with your website, page or app, etc.
                                        </p>
                                        <canvas id="online-sales-chart" class="mt-5 mt-md-4 mt-xl-5"></canvas>
                                        <div class="d-flex d-md-none d-xl-flex justify-content-between mt-5 mx-2">
                                            <div class="d-flex flex-column align-items-center">
                                                <h3 class="font-weight-bold">12%</h3>
                                                <small>Sales total</small>
                                            </div>
                                            <div class="d-flex flex-column align-items-center">
                                                <h3 class="font-weight-bold">20%</h3>
                                                <small>Sales total</small>
                                            </div>
                                            <div class="d-flex flex-column align-items-center">
                                                <h3 class="font-weight-bold">67%</h3>
                                                <small>Sales total</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-xl-8 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title flex-grow">market overview</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton6"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton6">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pl-0 pt-0">Product</th>
                                                        <th class="pt-0">Type</th>
                                                        <th class="pt-0">SKU</th>
                                                        <th class="pt-0">Quantity</th>
                                                        <th class="pt-0">Amount</th>
                                                        <th class="pr-0 pt-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="d-flex">
                                                                <div class="icon-rounded-success mr-3">
                                                                    <i class="mdi mdi-check"></i>
                                                                </div>
                                                                <div>
                                                                    WMQ96921
                                                                    <p class="smaller-text mb-0 mt-2 text-muted">18 Sep
                                                                        2019
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>#ABU81275</td>
                                                        <td>931</td>
                                                        <td>8</td>
                                                        <td>14689</td>
                                                        <td class="pr-0">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <label
                                                                    class="badge badge-outline-success mr-4 mr-xl-2">Completed</label>
                                                                <div class="icon-square-sm-danger hover-cursor">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="d-flex">
                                                                <div class="icon-rounded-danger mr-3">
                                                                    <i class="mdi mdi-close"></i>
                                                                </div>
                                                                <div>
                                                                    WMQ60538
                                                                    <p class="smaller-text mb-0 mt-2 text-muted">29 May
                                                                        2019
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>#HGA55521</td>
                                                        <td>828</td>
                                                        <td>37</td>
                                                        <td>19888</td>
                                                        <td class="pr-0">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <label
                                                                    class="badge badge-outline-danger mr-4 mr-xl-2">Cancelled</label>
                                                                <div class="icon-square-sm-danger hover-cursor">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="d-flex">
                                                                <div class="icon-rounded-warning mr-3">
                                                                    <i class="mdi mdi-information-outline"></i>
                                                                </div>
                                                                <div>
                                                                    WMQ95994
                                                                    <p class="smaller-text mb-0 mt-2 text-muted">24 Jun
                                                                        2019
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>#HGA99169</td>
                                                        <td>340</td>
                                                        <td>36</td>
                                                        <td>90939</td>
                                                        <td class="pr-0">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <label
                                                                    class="badge badge-outline-warning mr-4 mr-xl-2">Delayed</label>
                                                                <div class="icon-square-sm-danger hover-cursor">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="d-flex">
                                                                <div class="icon-rounded-warning mr-3">
                                                                    <i class="mdi mdi-information-outline"></i>
                                                                </div>
                                                                <div>
                                                                    WMQ37340
                                                                    <p class="smaller-text mb-0 mt-2 text-muted">14 Mar
                                                                        2019
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>#HGA26866</td>
                                                        <td>128</td>
                                                        <td>7</td>
                                                        <td>41198</td>
                                                        <td class="pr-0">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <label
                                                                    class="badge badge-outline-warning mr-4 mr-xl-2">Delayed</label>
                                                                <div class="icon-square-sm-danger hover-cursor">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="d-flex">
                                                                <div class="icon-rounded-success mr-3">
                                                                    <i class="mdi mdi-check"></i>
                                                                </div>
                                                                <div>
                                                                    WMQ61947
                                                                    <p class="smaller-text mb-0 mt-2 text-muted">05 Apr
                                                                        2019
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>#XCA68589</td>
                                                        <td>643</td>
                                                        <td>67</td>
                                                        <td>68601</td>
                                                        <td class="pr-0">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <label
                                                                    class="badge badge-outline-success mr-4 mr-xl-2">Completed</label>
                                                                <div class="icon-square-sm-danger hover-cursor">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="d-flex">
                                                                <div class="icon-rounded-success mr-3">
                                                                    <i class="mdi mdi-check"></i>
                                                                </div>
                                                                <div>
                                                                    WMQ37027
                                                                    <p class="smaller-text mb-0 mt-2 text-muted">07 Sep
                                                                        2019
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>#XCA24410</td>
                                                        <td>527</td>
                                                        <td>73</td>
                                                        <td>77178</td>
                                                        <td class="pr-0">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <label
                                                                    class="badge badge-outline-success mr-4 mr-xl-2">Completed</label>
                                                                <div class="icon-square-sm-danger hover-cursor">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                                            <nav>
                                                <ul
                                                    class="pagination flex-wrap pagination-separated pagination-dark mt-3 mb-0">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>
                                            <p class="text-muted mt-3 mb-0 ml-3 ml-md-0 d-none d-md-block">Showing 6 out
                                                of
                                                100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-xl-4 grid-margin stretch-card">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title flex-grow">sales total</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton7"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton7">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bold mb-3">$971883</h2>
                                        <p class="text-muted mb-4">The French Revolution constituted for the conscience
                                            of
                                            the dominant aristocratic class a fall from innocence, and upturning of the
                                            natural chain</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="font-weight-bold">400</h4>
                                                <div class="progress progress-md mb-2">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <small>Sales</small>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="font-weight-bold mt-3 mt-md-0">159</h4>
                                                <div class="progress progress-md mb-2">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <small>Orders</small>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="total-sales-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 grid-margin grid-margin-md-0 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title flex-grow">sales total</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton8"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton8">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice number</th>
                                                        <th>Franchise</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>00980814</td>
                                                        <td>West Paris</td>
                                                        <td>03 Oct 2019</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                        <td>58976</td>
                                                    </tr>
                                                    <tr>
                                                        <td>00928130</td>
                                                        <td>Sincereberg</td>
                                                        <td>02 Jul 2019</td>
                                                        <td><label class="badge badge-warning">Delayed</label></td>
                                                        <td>2379</td>
                                                    </tr>
                                                    <tr>
                                                        <td>00990867</td>
                                                        <td>New Otis</td>
                                                        <td>06 Sep 2019</td>
                                                        <td><label class="badge badge-danger">Cancelled</label></td>
                                                        <td>69432</td>
                                                    </tr>
                                                    <tr>
                                                        <td>00983826</td>
                                                        <td>Delilahfurt</td>
                                                        <td>26 May 2019</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                        <td>32354</td>
                                                    </tr>
                                                    <tr>
                                                        <td>0091820</td>
                                                        <td>North Darrel</td>
                                                        <td>11 Aug 2019</td>
                                                        <td><label class="badge badge-success">Completed</label></td>
                                                        <td>14192</td>
                                                    </tr>
                                                    <tr>
                                                        <td>00997307</td>
                                                        <td>South Melissa</td>
                                                        <td>02 Jan 2019</td>
                                                        <td><label class="badge badge-warning">Delayed</label></td>
                                                        <td>20680</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <p class="card-title flex-grow">Purchases For The Year</p>
                                            <div class="dropdown dropright card-menu-dropdown">
                                                <button class="btn" type="button" id="cardMenuButton9"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal card-menu-btn"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cardMenuButton9">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="purchases-chart" height="200"></canvas>
                                        <div class="d-flex justify-content-center mt-1 mt-xl-3">
                                            <small class="font-weight-bold">Purchases</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright &copy;
                                <script>
                                var today = new Date();
                                var date = today.getFullYear();
                                document.write(date);
                                </script> <a href="https://mixspace.xyz/" target="_blank">MixSpace Internet Services</a>
                                | <a href="#">Mer Community</a></span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Version
                                1.0.0</span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
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
    <script>
    // building current user profile
    document.getElementById("current-user-full-name-container").innerHTML = localStorage.full_name;
    document.getElementById("current-user-department-container").innerHTML = localStorage.department;
    var unformatted_picture_url = localStorage.picture_url;
    var picture_url = unformatted_picture_url.replace(/\\/g, "");
    document.getElementById("current-user-profile-picture").setAttribute("src", picture_url);
    console.log(picture_url);
    </script>
</body>

</html>