<?php
require_once('../include/header.php');
//авторизация пользователей
class Autorisation 
{
    
    //private $login;
    //private $password;

    // public function __constract($login, $password) {
    //     $this->login = $login;
    //     $this->password = $password;
    //     //$this->userCheck();
    // }

    public function userCheck($login, $password)
    {
        include_once('../include/dbConnect.php');
        $login = mysqli_real_escape_string($connection, $login);
        $query = "
            SELECT id, fio, login, password
            FROM employes
            WHERE login = '{$login}'
        ";
        $exec = mysqli_query($connection, $query);
        $result = mysqli_fetch_all($exec, MYSQLI_ASSOC);
        $_SESSION['access'] = 0;
        if ($exec) {
            if (!is_array($result)) {
                $_SESSION['log_error'] = "Нет такого пользователя";
            } elseif ($result[0]['password'] != md5($password)) {
                $_SESSION['log_error'] = "Неверный пароль";
            } elseif ($result[0]['password'] == md5($password) && $result[0]['login'] == $login) {
                $_SESSION['access'] = 1;
                $_SESSION['user_id'] = $result[0]['id'];
                $_SESSION['user_name'] = $result[0]['fio'];
            }
        }
    }
}