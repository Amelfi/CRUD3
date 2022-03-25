<?php


try {
    //code...
    $conn= new pdo ('mysql:host=localhost;dbname=aprendo','root','');
} catch (PDOexception $e) {
    //throw $th;
    exit($e->getMessage());
}



?> 

