<?php

require 'database.php';

$db = new Database();

// $db->addBook("Love Revolution", "Romance", 232);
$db->readBooks();


?>