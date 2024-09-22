<?php
include_once 'auth.php';
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
    $con=connect();
    $query = 'SELECT `title`,`description`  FROM `notes` where `id`=:id';
    $stat = $con->prepare($query);
    $stat->bindParam(":id",$id,PDO::PARAM_STR);
    $stat->execute();
    echo $stat->rowCount();
    if ($stat->rowCount()>0){
        $note = $stat->fetchObject();
        $_SESSION['note'] = $note->title;
        $_SESSION['description'] = $note->description;
    }else{
        $_SESSION['err']='404';
       // print_r($_SESSION);die;
       header("location:404.php");
       //die;
    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit note</title>
    <link rel="stylesheet" href="../style/edit-note-style.css">
    <link rel="stylesheet" href="../style/footer-style.css">
    <link rel="stylesheet" href="../style/nav-style.css">
    <link rel="stylesheet" href="../style/header-style.css">
</head>
<body>
<?php
include_once 'nav.php';
include_once 'hedder.php';
?>
<section>
    <h2>Edit note</h2>
    <form  action="update.php" method="post" >
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="note">Note</label>
        <input type="text" name="note" id="note" value="<?php if (isset($_SESSION['note'])) echo $_SESSION['note']; unset($_SESSION['note'])?>">
        <?php
        if (isset( $_SESSION['note-error']))echo '<div class="alert alert-danger" role="alert">'.  $_SESSION['note-error'].'</div>';
        unset(  $_SESSION['note-error']);
        ?>
        <label for="desc">Description</label>
        <input type="text" name="description" id="desc" value="<?php if (isset($_SESSION['description'])) echo $_SESSION['description']; unset($_SESSION['description'])?>">
        <?php
        if (isset( $_SESSION['desc-error']))echo '<div class="alert alert-danger" role="alert">'.  $_SESSION['desc-error'].'</div>';
        unset(  $_SESSION['desc-error']);
        ?>
        <input type="submit" value="Edit note">

    </form>
</section>
<?php
include_once 'footer.php'
?>
</body>
</html>
