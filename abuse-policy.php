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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>

    <div id="wrapper">
        <div class="container-scroller">
            <!-- topnav -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="#">
                        <img src="images/licet-logo.png" alt="logo">
                        <img src="images/assets/xstack.png" alt="xStack">
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="#">
                        <img src="images/licet-logo.png" alt="logo">
                        <img src="images/assets/xstack.png" alt="xStack">
                    </a>
                </div>

                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-start">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-information text-dark"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-left">
                        <li class="nav-item d-none d-lg-block">
                            <a href="#" class="nav-link">
                                <p class="text-dark">xStack at Loyola-ICAM College of Engineering and Technology</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <!-- main content -->
                <div class="main-panel" style="width: 100vw !important;">

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
                                                <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                                <p class="text-light mb-0 hover-cursor">
                                                    About
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-5 mb-5 pb-5">
                            <h3 class="font-weight-bold text-center">IPR Complaints</h3>

                            <p class="text-center text-white mt-5">
                                We treat all abuse reports concerning xStack seriously and are dedicated to
                                investigating
                                all violations submitted to us. If you come across content on xStack that you think
                                violates our Terms of Service, please report a violation. After you submit a report,
                                we'll investigate it and take the appropriate action. We'll get back to you only if we
                                require additional details or have more information to share. We may close your report
                                without a response, if we believe that the reported instance does not amount to a
                                violation.
                            </p>
                        </div>
                    </div>

                    <div class="content-wrapper">

                        <!-- end of row -->
                        <div class="container pt-5 pb-5">

                            <h2 class="font-weight-bold text-center mt-5">Types of Abuse</h2>

                            <p class="custom-para text-center mt-4">
                                We have sorted various kinds of abuse into the following categories:
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Spam, Malware and Phishing</b> – Users are prohibited from using xStack Services for the
                                transmission of "junk mail", "spam", "chain letters", “phishing” or unsolicited mass
                                distribution of email.
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Promotes Hatred, Violence or Illegal/Offensive Activities</b> – Transmission or publishing any content that (i) is unlawful, illegal, hateful, promotes racism or promotes discrimination or hatred based on ethnicity, and (ii) defames, abuses, harasses, stalks, threatens or otherwise violates privacy and other legal rights of others, are explicitly considered as prohibited activities by xStack.
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Sexually Explicit Material</b> – Sexually explicit materials are those materials that contain adult or mature content. We do not authorize users to publish or transmit sexually explicit material using xStack Services.
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Child Exploitation</b> – We have a zero tolerance policy towards content that exploits children. This means we will terminate the accounts of any user that we find sharing or publishing child abuse content. We will also report the content and its owner to law enforcement authorities.
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Personal and Confidential Information</b> – We do not allow use of xStack services to publish personal and confidential information of persons that is not publicly accessible without their explicit consent. Examples of personal and confidential information are full name, phone number, address, social security number, credit card number, government issued identification card details and bank information.
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Copyright infringement</b> – Copyright infringement occurs when someone other than the copyright holder copies the “expression” of a work. If you discover that there has been copyright infringement by a xStack user involving your work we will take necessary action as <a href="ipr-complaints.php">specified here</a>.
                            </p>

                            <p class="custom-para text-justify mt-4">
                                <b>Other Violations</b> – If you believe that you have a violation to report, that does not fall within any of the categories mentioned above, you may choose this to report such violation. Please note that you will be required to provide a description of such violation for us to take an appropriate action.
                            </p>
                        </div>
                        <!-- end of container -->
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


</body>

</html>