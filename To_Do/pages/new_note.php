<?php
include_once 'auth.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New note</title>
    <link rel="stylesheet" href="../style/new-note-style.css">
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
    <h2>Add new note</h2>
    <input type="hidden" name="id">
    <form  action="add_note.php" method="post" >
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
        <input type="submit" value="Add note">

    </form>
</section>
<?php
include_once 'footer.php'
?>
</body>
</html>
