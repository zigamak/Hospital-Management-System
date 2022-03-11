<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Login Page</title>
</head>
<body style="background-image:url(img/login.png); background-size:cover; background-repeat:no-repeat; ">
    

<?php
include("include/header.php");

?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 jumbotron">
                <h5 class="text-center my-5">Doctors Login</h5>
                <form method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="unname" class="form-control"
                         autocomplete="off" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label> Password</label>
                        <input type="text" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
                    </div>
                    <input type="submit" name="login" class="btn btn-success" value="Login">
                    <p>Don't have an account? <a href="">Apply Now!!!</a></p>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
</body>
</html>