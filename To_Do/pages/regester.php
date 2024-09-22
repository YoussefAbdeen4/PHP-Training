<?php
include_once 'gust.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../style/footer-style.css">
    <link rel="stylesheet" href="../style/nav-style.css">
    <link rel="stylesheet" href="../style/header-style.css">
    <link rel="stylesheet" href="../style/register-style.css">
</head>
<body>
<?php
include_once 'nav.php';
include_once 'hedder.php';
?>
    <section>
        <form action="add_user.php" method="post" >
            <input type="hidden" name="id">
            <label for="fname">First Name</label>
            <input type="text" name="first_name" id="fname" value="<?php if (isset($_SESSION['first_name']))echo $_SESSION['first_name'];unset($_SESSION['first_name']) ?>">
            <?php
            if (isset($_SESSION['first_name-error']))echo '<div class="alert alert-danger" role="alert">'.$_SESSION['first_name-error'].'</div>>';
            unset($_SESSION['first_name-error']);
            ?>
            <label for="lname">Last Name</label>
            <input type="text" name="last_name" id="lname" value="<?php if (isset($_SESSION['last_name'])) echo $_SESSION['last_name']; unset($_SESSION['last_name'])?>">
            <?php
            if (isset($_SESSION['last_name-error']))echo '<div class="alert alert-danger" role="alert">'. $_SESSION['last_name-error'].'</div>';
            unset($_SESSION['last_name-error']);
            ?>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php if (isset($_SESSION['email']))echo $_SESSION['email'];unset($_SESSION['email']) ?>">
            <?php
            if (isset($_SESSION['email-error']))echo '<div class="alert alert-danger" role="alert">'. $_SESSION['email-error'].'</div>';
            unset($_SESSION['email-error']);
            ?>
            <label for="pass">Password</label>
            <input type="password" name="password" id="pass" value="<?php if (isset($_SESSION['pass']))echo $_SESSION['pass'];unset($_SESSION['pass']) ?>">
            <?php
            if (isset($_SESSION['pass-error']))echo '<div class="alert alert-danger" role="alert">'. $_SESSION['pass-error'].'</div>';
            unset($_SESSION['pass-error']);
            ?>
            <label for="c-pass">Confirm Password</label>
            <input type="password" name="confirm-password" id="c-pass" >
            <?php
            if (isset($_SESSION['c-pass-error']))echo '<div class="alert alert-danger" role="alert">'. $_SESSION['c-pass-error'].'</div>';
            unset($_SESSION['c-pass-error']);
            ?>
            <input type="submit" value="Register">
        </form>
    </section>
 <?php
 include_once 'footer.php'
 ?>
</body>
</html>