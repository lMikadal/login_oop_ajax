<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <!--  CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid my-5 w-50">
        <div class="card rounded">     
            <div class="card-body">
                <?php include('../function/errors.php');?>
                <h1 class="card-title text-center"><b>Register</b></h1>
                <form action="register_db.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" onblur="checkusername(this.value)">
                        <span id="usernameavailable" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Eamil</label>
                        <input type="email" class="form-control" name="email" id="email" onblur="checkemail(this.value)" required>
                        <span id="emailavailable" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_com" class="form-label">Comfirm Password</label>
                        <input type="password" class="form-control" name="password_com" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="sing_up">Sing Up</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <p>Already have an Account? <a href="/ProjectLogin/login/login.php">Sign in</a></p>
            </div>
        </div>
    </div>
    
    <!-- JS ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../function/script.js"></script>
    
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>