<?php 
    include "mysql.php";
    session_start();
    $id = $_POST['id']; 
    $username = $_POST['name']; 

        $conn1 = new DBconn();
        $conn1->connect();
        $table = "dang_nhap";
        $column = "name";
        $value = "$username";
        $where = "id = $id";
        $conn1->update($table, $column, $value,$where);
       
?>
