<?php

require_once('../include/header.php');
$_SESSION["access"] = 0;
unset($_SESSION);

session_destroy();
print_r($_SESSION);
header('location: index.php');