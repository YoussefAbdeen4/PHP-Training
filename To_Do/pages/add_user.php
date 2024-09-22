<?php
session_start();
include_once 'validation.php';
include_once 'connection.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['confirm-password'];
if (validate_register($first_name,$last_name,$email,$password,$c_password)){
    try {
        $con= connect();
        $query = 'insert into `users`(`fname`,`lname`,`email`,`pass`) values (:first_name,:last_name,:email,:password)';
        $stat=$con->prepare($query);
        $stat->bindParam(":first_name",$first_name,PDO::PARAM_STR) ;
        $stat->bindParam(":last_name",$last_name,PDO::PARAM_STR) ;
        $stat->bindParam(":email",$email,PDO::PARAM_STR) ;
        $stat->bindParam(":password",$password,PDO::PARAM_STR) ;
        $stat->execute();
        if ($stat->errorInfo()[2] != null){
            var_dump($stat->errorInfo()[2]);
        }else {
            header("location:login.php");
        }
    }catch (Exception $e){

    }

}else {
    //print_r($_SESSION);
    header("location:regester.php");
}
?>