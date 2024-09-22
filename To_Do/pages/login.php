<?php
include_once 'gust.php';
//print_r($_SESSION);die;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
   <link rel="stylesheet" href="../style/login-style.css">
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
    <h2>login</h2>
    <form  action="check_user.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <?php
        if (isset( $_SESSION['email-error']))echo '<div class="alert alert-danger" role="alert">'. $_SESSION['email-error'].'</div>';
        unset( $_SESSION['email-error']);
        ?>
        <label for="pass">Password</label>
        <input type="password" name="password" id="pass">
        <?php
        if (isset($_SESSION['pass-error']))echo '<div class="alert alert-danger" role="alert">'.$_SESSION['pass-error'].'</div>';
        unset($_SESSION['pass-error']);
        if (isset($_SESSION['login-errors']))echo '<div class="alert alert-danger" role="alert">'.$_SESSION['login-errors'].'</div>';
        unset($_SESSION['login-errors']);
        ?>
        <input type="submit" value="Login">
        <p>You do nt have account go to <a href="regester.php">register</a> page</p>
    </form>
</section>
<?php
include_once 'footer.php'
?>
</body>
</html>