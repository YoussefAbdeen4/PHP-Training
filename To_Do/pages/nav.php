<nav>
    <a href="new_note.php">Add-note</a>
    <a href="notes.php">Your notes</a>
    <?php

    if (isset($_SESSION['fname']) and isset($_SESSION['lname']) and isset($_SESSION['id'])){
    ?>
    <a href="logout.php">Logout</a>
    <a href="index.php"><?= $_SESSION['fname'].' '.$_SESSION['lname'] ?></a>
    <?php
    }
    else{
    ?>
    <a href="login.php">Login</a>
    <a href="regester.php">Register</a>
    <?php
    }
    //print_r($_SESSION)
    ?>
</nav>