<?php

require_once('../include/header.php');
if ($_SESSION['access'] != 1) {
    header('location: exit.php');
}

require_once('../class/RecordsWork.php');
$costumers = new RecordsWork;

//добавление новой записи
if ($_POST['action'] == "addRow") {
    $add = $costumers->add($_POST);
    if ($add) {
        print_r("Запись успешно добавлена!");
    } else {
        print_r("Не удалось добавить запись!");
    }
} elseif ($_POST['action'] == "delRow") {
    $del = $costumers->del($_POST['delete_id']);
}

//список заказчиков
$costumersArray = $costumers->selectQuery('costumers');
$smarty->assign('costumers', $costumersArray);

//список заказов
$ordersArray = $costumers->selectQuery('orders');
$smarty->assign('orders', $ordersArray);

//список сотрудников
$empArray = $costumers->selectQuery('employes');
$smarty->assign('employes', $empArray);

$smarty->assign('session', $_SESSION);

$smarty->display('main.tpl');
