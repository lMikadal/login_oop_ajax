<?php
//Create var DB
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project_login_oop_ajax');

    class DB_con{
        function __construct(){
            // Create connection
            $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
            $this->dbcon = $conn;

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        }
        // Check available
        public function usernameavailable($username){
            $sql = "SELECT username FROM user WHERE username = '$username'";
            $checkuser = mysqli_query($this->dbcon, $sql);
            return $checkuser;
        }
        public function emailavailable($email){
            $sql = "SELECT email FROM user WHERE email = '$email'";
            $checkemail = mysqli_query($this->dbcon, $sql);
            return $checkemail;
        }

        // query register form
        public function registration($username, $email, $encodepass){
            $sql = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$encodepass')";
            $reg = mysqli_query($this->dbcon, $sql);
            return $reg;
        }

        // Check login
        public function signin($username, $encodepass){
            $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$encodepass'";
            $signin = mysqli_query($this->dbcon, $sql);
            return $signin;
        }
    }


?>