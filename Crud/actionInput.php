<?php 
    
    require 'database.php';

    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $author = $_POST['author'];

    $db = new Database();

    $db->simpanData($title, $genre, $author);
    header("location:books.php");

?>