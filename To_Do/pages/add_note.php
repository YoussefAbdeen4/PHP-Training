<?php
session_start();
include_once 'validation.php';
include_once 'connection.php';
$note=$_POST['note'];
$description=$_POST['description'];
$date=date("Y-m-d");
$u_id=$_SESSION['id'];
if (validate_note($note,$description)){
    try {
        $con= connect();
        $query = 'insert into `notes`(`title`,`description`,`user_id`,`n_date`) values (:title,:description,:u_id,:date)';
        $stat=$con->prepare($query);
        $stat->bindParam(":title",$note,PDO::PARAM_STR) ;
        $stat->bindParam(":description",$description,PDO::PARAM_STR) ;
        $stat->bindParam(":u_id",$u_id,PDO::PARAM_STR) ;
        $stat->bindParam(":date",$date,PDO::PARAM_STR) ;
        $stat->execute();
       // $notes=$stat->fetchAll(PDO::FETCH_ASSOC);
        if ($stat->errorInfo()[2] != null){
            var_dump($stat->errorInfo()[2]);
        }else {
         //   print_r($notes);
            header("location:notes.php");
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }

}else {
    header("location:new_note.php");
}