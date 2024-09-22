<?php
include_once 'connection.php';
if (isset($_GET['id'])) $id=$_GET['id'];
else {
    $_SESSION['err']='404';
    header("location:404.php");
}
if (preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{1,}$/',$id)) {
    $_SESSION['err']='404';
    header("location:404.php");
}
try {
    $con = connect();
    $query='update notes set done = :val where Id=:id';
    $stat = $con->prepare($query);
    $i = 1;
    $stat->bindParam(":val", $i,PDO::PARAM_STR);
    $stat->bindParam(":id", $id,PDO::PARAM_STR);
    $stat->execute();
    if ($stat->errorInfo()[2]){
        echo $stat->errorInfo()[2];
    }else header("location:notes.php");
}catch (Exception $e){
    echo $e->getMessage();
}
