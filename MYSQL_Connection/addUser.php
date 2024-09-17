<?php
include_once 'connection.php';
//var_dump($_POST);
$fName=$_POST['first_name'];
$lName=$_POST['last_name'];
$img = $_FILES['img']['name'];
try {
    $con=connect();
   if ($img!="") {
       $sql = "insert into students (fname, lname, img) VALUES ('$fName', '$lName', '$img')";
   }
   else {
       $sql = "insert into students (fname, lname) VALUES ('$fName', '$lName')";
   }
    $query=$con->query($sql);
    if ($query) header("location:table.php");
    else echo "ERROR..!";
}catch (\mysql_xdevapi\Exception $e) {
    echo $e->getMessage();
}


