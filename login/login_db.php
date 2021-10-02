<?php
include_once('../function/function.php');
session_start();
$userdata = new DB_con();

if(isset($_POST['log_in'])){
    $username = mysqli_real_escape_string($userdata->dbcon, $_POST['username']);
    $password = mysqli_real_escape_string($userdata->dbcon, $_POST['password']);
    $encodepass = md5($password);

    $loginQuery = $userdata->signin($username, $encodepass);

    if(mysqli_num_rows($loginQuery) == 1){
        $_SESSION['username'] = $username;
        header('location: /ProjectLogin/index.php');
    }else{
        $_SESSION['err_wrong'] = "Email or Password wrong";
        header('location: /ProjectLogin/login/login.php');
    }
}
?>