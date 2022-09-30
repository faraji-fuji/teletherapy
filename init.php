<?php
$db_server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "therapy";

//initial connection to the database server
$db_server = new mysqli($db_server_name, $db_user_name, $db_password);
$db_server->query("CREATE DATABASE IF NOT EXISTS `therapy`");
