<?php
define("db_host","localhost");
define("db_user","root");
define("db_password","");
define("db_name","to_do");
try {
    function connect(): PDO
    {
        $dns='mysql:dbname=to_do;host=localhost;port=3306;';
        $con=new PDO($dns,db_user,db_password);
        return $con;
    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>