<?php
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");

session_name("mining");
if (!session_id()) {
    session_start();
    setcookie(session_name(), session_id(), time() + 7200);
}

require_once('../libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../templates';
$smarty->compile_dir = '../templates_c';
$smarty->force_compile = true;
