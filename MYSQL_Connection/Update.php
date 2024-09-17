<?php
include_once 'connection.php';
//var_dump($_POST);
$id=$_POST['id'];
$fName=$_POST['first_name'];
$lName=$_POST['last_name'];
$img = $_FILES['img']['name'];
try {
    $con=connect();
    $sql = "UPDATE students SET fname='$fName', lname='$lName', img='$img' WHERE id=$id";
    $query=$con->query($sql);
    if ($query) header("location:table.php");
    else echo "ERROR..!";
}catch (\mysql_xdevapi\Exception $e) {
    echo $e->getMessage();
}
