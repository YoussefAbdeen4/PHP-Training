<?php
include_once 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
}
else {
   // echo 'aaa';
    header("location:404.php");
}
if (preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{1,}$/',$id)) {
   // echo 404;
    $_SESSION['err']='404';
    header("location:404.php");
}
try {
    $con = connect();
    $query = 'delete from notes where Id=:id';
    $statement = $con->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    header('location:notes.php');
} catch (\mysql_xdevapi\Exception $exception) {
    echo $exception->getMessage();
}

