<?php
function connect(){
    $server='localhost';
    $user='root';
    $pass='';
    $db='Class';
    $conn= new mysqli($server,$user,$pass,$db);
//    if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//    }else echo 'success connect';
    return $conn;
}
//connect();
?>