<?php
function validate_register($f_name,$l_name,$email,$pass,$c_pass) : bool{
    $flag=true;
    $pattern="/^[A-Z][a-z]+$/";
    if (!preg_match($pattern,$f_name)) {
        $_SESSION['first_name-error'] = "First name is not valid...!";
        $flag = false;
    }
    if (!preg_match($pattern,$l_name)) {
        $_SESSION['last_name-error'] = "Last name is not valid...!";
        $flag = false;
    }
    $pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
    if (!preg_match($pattern,$email)) {
        $_SESSION['email-error'] = "Email is not valid...!";
        $flag = false;
    }
    $pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/";
    if (!preg_match($pattern,$pass)) {
        $_SESSION['pass-error'] = "At Least 8 Characters, Uppercase, Lowercase, Digits, Special Characters (@$!%*?&)...!";
        $flag = false;
    }else if ($pass!=$c_pass){
        $_SESSION['c-pass-error'] = "Password is not conformed...!";
        $flag=false;
    }
    if (!$flag){
        $_SESSION['first_name'] = $f_name;
        $_SESSION['last_name'] = $l_name;
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
    }
    return $flag;
}
function validate_login($email,$pass) : bool{
    $flag=true;
    $pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";
    if (!preg_match($pattern,$email)) {
        $_SESSION['email-error'] = "Email is not valid...!";
        $flag = false;
    }
    $pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/";
    if (!preg_match($pattern,$pass)) {
        $_SESSION['pass-error'] = "At Least 8 Characters, Uppercase, Lowercase, Digits, Special Characters (@$!%*?&)...!";
        $flag = false;
    }

    return $flag;
}
function validate_note($note,$desc)
{
    $flag=true;
    $pattern = "/^(?=.*[a-zA-Z0-9 ])[A-Za-z\d ]{1,}$/";
    if (!preg_match($pattern,$note)) {
        $_SESSION['note-error'] = "Note do not match pattern . You must input upper case , lower case characters and numbers only...!";
        $flag = false;
    }
    if (!preg_match($pattern,$desc)) {
        $_SESSION['desc-error'] = "Description do not match pattern . You must input upper case , lower case characters and numbers only...!";
        $flag = false;

    }
    if (!$flag){
        $_SESSION['note']=$note;
        $_SESSION['description']=$desc;
    }
    return $flag;
}