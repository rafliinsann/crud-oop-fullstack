<?php 

class Database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "db_library";
    private $conn; 

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
        if ($this->conn) {
            echo "koneksi berhasil";
            echo "<br>";
        }else{
            echo "koneksi gagal"; 
            echo "<br>";
        }
    }


    function readBooks(){
        echo "<a href='inputData.php'>Tambah Data</a>";
        echo "<table border='1'>";
        echo "
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Author</th>
            <th>Action</th>
        </tr>";
        

        $query = "SELECT * FROM books ORDER BY no";
        $result = mysqli_query($this->conn, $query);

        while ($data = mysqli_fetch_array($result)) {
        echo "
            <tr>
                <td>".$data['title']."</td>
                <td>".$data['genre']."</td>
                <td>".$data['author']."</td>
                <td><a href='editBook.php?id=".$data['no']."'>Edit</a>  |  <a href='actionHapus.php?id=".$data['no']."'>Delete</a></td>
            </tr>
            ";
        } 
        echo "</table>";
    }

    function simpanData($title, $genre, $author ){

        $query = mysqli_query($this->conn, "INSERT INTO books (title, genre, author) VALUES ('$title', '$genre', '$author')");
        

    }

    function editData($id){

        $query = mysqli_query($this->conn, "SELECT * FROM books WHERE no=$id");
        while ($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        } 

        return $data;

    }

    function actionEdit($id, $title, $genre, $author, ){

        mysqli_query($this->conn, "UPDATE books SET title='$title', genre='$genre', author='$author' WHERE no='$id' ");

    }

    function hapusData($id){
        mysqli_query($this->conn, "DELETE FROM books WHERE no='$id' ");
    }

}



?>