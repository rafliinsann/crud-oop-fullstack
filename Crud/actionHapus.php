<?php 

    require 'database.php';

    $id = $_GET['id'];

    $db = new Database();

    $db->hapusData($id);
    header("location:books.php");

?>