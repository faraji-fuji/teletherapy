<?php
session_start();
$_SESSION['loginStatus'] = FALSE;
session_commit();
echo "<script>";
echo "location.assign('index.php')";
echo "</script>";
