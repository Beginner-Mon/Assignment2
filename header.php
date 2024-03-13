<?php
function get_Toolid($toolid)
{
    switch ($toolid) {
        case 1:
            return "index_nav";
        case 2:
            return "job_nav";
    }
}
?>


<header class="navbar <?php
                        if (isset($toolid)) {
                            echo get_Toolid($toolid);
                        }
                        ?>">
    <input type="checkbox" id="menu" class="checkbtn">
    <label for="menu" class="menu-checkbox"><i class="fa fa-bars"></i></label>
    <a href="index.php" class="navbar__item--logo"><img src="images/logo.png" alt="Lapis.logo" class="img"><span class="logo-name"> Lapis</span></a>
    <ul class="navbar__items">
        <li class="navbar__item">
            <a href="jobs.php" class="navbar__item--child">Jobs</a>
        </li>
        <li class="navbar__item">
            <a href="apply.php" class="navbar__item--child">Apply</a>
        </li>
        <li class="navbar__item">
            <a href="about.php" class="navbar__item--child">About&nbsp;us</a>
        </li>
        <li class="navbar__item">
            <a href="enhancements.php" class="navbar__item--child">Enhancements</a>
        </li>
    </ul>
</header>