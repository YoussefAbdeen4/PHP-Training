<?php
session_start();
include_once 'validation.php';
include_once 'connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
if (validate_login( $email, $password)) {
    try {
        $con = connect();
        $query = 'select `id`,`fname` , `lname` from `users` where email=:email and pass=:pass';
        $stat = $con->prepare($query);
        $stat->bindParam(":email",$email,PDO::PARAM_STR);
        $stat->bindParam(":pass",$password,PDO::PARAM_STR);
        $stat->execute();
        if ($stat->rowCount()==0){
            $_SESSION['login-errors']="Email or password are not valid...!";
          //  echo "Email or password are not valid...!";
            header("location:login.php");
        }else{
            $user=$stat->fetchObject();
            $_SESSION['id']=$user->id;
            $_SESSION['fname']=$user->fname;
            $_SESSION['lname']=$user->lname;
           // echo $user->fname.' '.$user->lname;
            header("location:index.php");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

} else {
   // print_r($_SESSION);
    header("location:login.php");
}
