<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#">
            <img src="images/favicon.png" alt="xStack">
        </a>
        <a class="navbar-brand brand-logo-mini" href="#">
            <img src="images/favicon.png" alt="xStack">
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-left">
            <li class="nav-item d-none d-lg-block">
                <a href="user-management.php" class="nav-link">
                    <p id="usersNavLink">Users</p>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a href="create-class-page.php" class="nav-link">
                    <p id="createClassNavLink">Classes</p>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a href="subjects-page.php" class="nav-link">
                    <p id="subjectsNavLink">Subjects</p>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a href="extras-page.php" class="nav-link">
                    <p id="extrasNavLink">Extras</p>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a href="permissions-page.php" class="nav-link">
                    <p id="permissionsNavLink">Permissions</p>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img id="current-user-profile-picture" alt="profile-pic"
                        src="https://weareeverywhere.in/images/profile-pictures/311100205003.png">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a href="settings.php" class="dropdown-item">
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
                    <i class="mdi mdi-clipboard-text-outline"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>

    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</nav>