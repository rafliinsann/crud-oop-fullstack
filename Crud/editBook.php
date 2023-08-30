<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

    

    <form action="actionEdit.php" method="post">
    <?php 
        $id =$_GET['id'];
        require 'database.php';
        $db = new Database();
        foreach ($db->editData($id) as $data) {
            
    ?>
        <input style="margin-top: 4px;" type="text" name="title" placeholder="Masukkan Title" value="<?php echo $data['title'] ?>"> <br>
        <input style="margin-top: 4px;" type="text" name="genre" placeholder="Masukkan Genre" value="<?php echo $data['genre'] ?>"> <br>
        <input style="margin-top: 4px;" type="text" name="author" placeholder="Masukkan Author" value="<?php echo $data['author'] ?>"> <br>
        <input style="margin-top: 4px;" type="hidden" name="no" placeholder="Masukkan Author" value="<?php echo $data['no'] ?>"> <br>
        <button style="margin-top: 4px;" type="submit">Simpan</button>
    </form>
    
    <?php
        }
    ?>

</body>
</html>