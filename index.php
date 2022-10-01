<?php
session_start();
if (!(isset($_SESSION['loginStatus']))) {
    $_SESSION['loginStatus'] = FALSE;
}
include("connect.php");
include("head.php");
include("header.php");
include("cta.php");
include("services.php");
include("testimonials.php");
include("contactUs.php");
include("footer.php");
