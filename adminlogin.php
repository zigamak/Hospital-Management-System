<?php

session_start();
include 'include/connection.php';

if (isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();
    if (empty($username)){
        $error['admin'] = "Enter Username"; }
    else if(empty($password)){
        $error['admin'] ="Enter Password"; }
    
    if (count($error)==0){
        $query =  "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($connect,$query);

        if (mysqli_num_rows($result) == 0){
            echo "<script>alert('Logged In!!')</script>";
            $_SESSION['admin'] = $username;

            header("Location:admin/index.php");
        }else{
            echo "<script>alert('Invalid Name and Password')</script>";    
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php

include 'include/header.php';
    ?>

    <div style="margin-top: 60px;"> </div>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="cold-md-3">

                </div>
                
                <div class="cold-md-6 jumbotron">
                    <form method="post">
                        <div class="alert alert-danger">
                            <?php

                            if (isset($error['admin'])){
                                $sh= $error['admin'];
                                $show = '<h4 class="alert alert-danger">$sh</h4>' ;
                                
                            }
                            else{
                                $show="";
                            }
                            echo $show; 
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>                           
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                        </div>
                        <input type="submit" name="login" class="btn btn-success" value="Login">
                    </form>
                </div>
                
                <div class="cold-md-3">

                </div>
            </div>
        </div>
    </div>
    </body>
</html>