<?php
include_once 'auth.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../style/home-style.css">
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
    <div class="notes">
        <a href="notes.php">
            <img src="../photo/brett-jordan-aJ08i9-5k7E-unsplash.jpg" alt="View your notes">
            <p>View your notes</p>
        </a>
    </div>
    <div class="notes">
        <a href="new_note.php">
            <img src="../photo/andrik-langfield-1-YQiOijio8-unsplash.jpg" alt="Add new notes">
            <p>Add new notes</p>
        </a>
    </div>
</section>
        <?php
        include_once 'footer.php'
        ?>
</body>
</html>
