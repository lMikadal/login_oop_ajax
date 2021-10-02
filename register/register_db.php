<?php
include_once('../function/function.php');
session_start();
$userdata = new DB_con();

//Check username
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $sql = $userdata->usernameavailable($username);
    $num = mysqli_num_rows($sql);
    if($num > 0){
        echo "<span> Username repeat </span>";
    }
}
//Check email
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $sql = $userdata->emailavailable($email);
    $num = mysqli_num_rows($sql);
    if($num > 0){
        echo "<span> Email repeat </span>";
    }
}

if(isset($_POST['sing_up'])){
    // Protect sql
    $username = mysqli_real_escape_string($userdata->dbcon, $_POST['username']);
    $email = mysqli_real_escape_string($userdata->dbcon, $_POST['email']);
    $password = mysqli_real_escape_string($userdata->dbcon, $_POST['password']);
    $password_com = mysqli_real_escape_string($userdata->dbcon, $_POST['password_com']);

    // Check password match
    if($password != $password_com){
        $_SESSION['err_notmatch'] = "Password not match";
        header('location: /ProjectLogin/register/register.php');
    }else{
        //เช็ค username, email ซ้ำ
        $check_repeat = "SELECT * FROM user WHERE username = '$username' OR Email = '$email'";
        $query = mysqli_query($userdata->dbcon, $check_repeat);
        $result = mysqli_fetch_assoc($query);

        if($result){
            //เช็ค username
            if($result['username'] === $username){
                $_SESSION['err_username'] = "Username repeat";
                header('location: /ProjectLogin/register/register.php');
            }
            //เช็ค email
            if($result['email'] === $email){
                $_SESSION['err_email'] = "Email repeat";
                header('location: /ProjectLogin/register/register.php');
            }
        }else{
            $encodepass = md5($password);
            $regQuery = $userdata->registration($username, $email, $encodepass);
    
            if($regQuery){
                $_SESSION['username'] = $username;
                header('location: /ProjectLogin/index.php');
            }
        }

    }

}



?>