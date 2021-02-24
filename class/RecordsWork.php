<?php
//работа с заявками: вывод заявок, добавление удаление
class RecordsWork
{
    public function add($post)
    {
        include('../include/dbConnect.php');
        $name = mysqli_real_escape_string($connection, $post['name']);
        $date = mysqli_real_escape_string($connection, $post['date']);
        $country = mysqli_real_escape_string($connection, $post['country']);
        $notice = mysqli_real_escape_string($connection, $post['notice']);
        $costumer = mysqli_real_escape_string($connection, $post['costumer']);
        $user_id = mysqli_real_escape_string($connection, $post['employes']);
        $query = "
            INSERT INTO orders (name, date, country_id, notice, costumer_id, employes_id) VALUES
            ('{$name}', '{$date}', '{$country}', '{$notice}', '{$costumer}', '{$user_id}') 
        ";
        $exec = mysqli_query($connection, $query);

        if ($exec == false) {
            $result = 0;
        } else {
            $result = 1;
        }
        return $result;
    }

    public function del($id)
    {
        include('../include/dbConnect.php');
        $id = mysqli_real_escape_string($connection, $id);
        $query = "
            DELETE FROM orders WHERE id = '{$id}'
        ";
        $exec = mysqli_query($connection, $query);

        if ($exec == false) {
            $result = 0;
        } else {
            $result = 1;
        }
        return $result;
    }

    public function selectQuery($table_name)
    {
        include('../include/dbConnect.php');
        if ($table_name == 'costumers') {
            $query = "
                SELECT id, name
                FROM costumers;
            ";
        } elseif ($table_name == 'orders') {
            $query = "
                SELECT o.id, o.name, o.date, c.name country, o.notice, cos.name costumer, emp.fio
                FROM orders o
                JOIN country c ON c.id = o.country_id
                JOIN costumers cos ON cos.id = o.costumer_id
                JOIN employes emp ON emp.id = o.employes_id
                ORDER BY o.id
            ";
        } elseif ($table_name == 'employes') {
            $query = "
                SELECT id, fio
                FROM employes
            ";
        } else {
            //TO DO
        }

        $exec = mysqli_query($connection, $query);
        
        if ($exec == false) {
            $result = "Произошла ошибка при выполнении запроса: " . $exec;
        } else {
            $result = mysqli_fetch_all($exec, MYSQLI_ASSOC);
        }
        return $result;
    }
}
