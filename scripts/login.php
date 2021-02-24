<?php
require_once('../include/header.php');
require_once('../class/Autorisation.php');

$autorisation = new Autorisation();
$res = $autorisation->userCheck($_POST['login'], $_POST['password']);

if ($_SESSION["access"] == 1) {
    header('location: /mining/main.php');
} else {
    print_r($_SESSION['log_error']);
}