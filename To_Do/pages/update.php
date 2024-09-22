<?php
session_start();
include_once 'validation.php';
include_once 'connection.php';
$id=$_POST['id'];
$note=$_POST['note'];
$description=$_POST['description'];
$done=0;
print_r($_POST);
if (validate_note($note,$description)){
    try {
        $con= connect();
       // echo 1 .'<br>';
        $query='update notes set title=:note ,description=:description,done = :val where Id=:id';
        //echo 2 .'<br>';
        $stat=$con->prepare($query);
        //echo 3 .'<br>';
        $stat->bindParam(":note",$note,PDO::PARAM_STR) ;
        //echo 4 .'<br>';
        $stat->bindParam(":description",$description,PDO::PARAM_STR) ;
        //echo 5 .'<br>';
        $stat->bindParam(":val" , $done,PDO::PARAM_STR);
        //echo 6 .'<br>';
        $stat->bindParam(":id",$id,PDO::PARAM_STR);
        //echo 7 .'<br>';
        $stat->execute();
        //echo 8 .'<br>';
        if ($stat->errorInfo()[2] != null){
           // echo 'eeee';
            var_dump($stat->errorInfo()[2]);
        }else {
            header("location:notes.php");
        }
    }catch (Exception $e){
       // echo 'eeee';
        echo $e->getMessage();
    }

}else {
    header("location:update_note.php");
}