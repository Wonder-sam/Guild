<?php
session_start();
require_once "conn.php";
$_SESSION[] = array();
session_destroy();
header('location: login.php');
?>