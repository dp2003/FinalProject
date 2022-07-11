<?php
session_start();
$dbHost = 'localhost';
$dbName = 'bangles';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>