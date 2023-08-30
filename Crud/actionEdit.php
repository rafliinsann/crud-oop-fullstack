<?php 
    
    require 'database.php';
    
    $id = $_POST['no'] ?? 0;
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $author = $_POST['author'];

    $db = new Database();
    $db->actionEdit($id, $title, $genre, $author);
    // $db->actionInsert($id, $title, $genre, $author);
    header("location:books.php");

    // if ($id !== 0) {
    //     $db->actionEdit($id, $title, $genre, $author);
    // }else{
         // $db->actionInsert($id, $title, $genre, $author);    
    // }

    // $datas = mysqli_query($this->conn, )

?>