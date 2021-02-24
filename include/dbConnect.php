<?php

$host = 'localhost';
$database = 'mining';
$user = 'root';
$dbpassword = 'root';

$connection = mysqli_connect($host, $user, $dbpassword, $database) or die("Ошибка " . mysqli_error($connection));
mysqli_query($connection, "SET NAMES 'utf8'");
