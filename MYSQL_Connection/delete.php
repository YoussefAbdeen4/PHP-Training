<?php
include_once 'connection.php';
$id=$_GET['id'];
try {
    $con = connect();
    $sql = "DELETE FROM students WHERE id=$id";
    $con->query($sql);
    header('location:table.php');
}catch (\mysql_xdevapi\Exception $exception){
    echo $exception->getMessage();
}