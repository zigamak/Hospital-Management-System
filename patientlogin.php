<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-image:url(img/login.php); background-image:no-repeat; background-size:cover;">
    <?php
        include("include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6 my-5">
                    <h5 class="text-center my-3">Patient Login</h5>
                    <form method="post">
                        <div class="form-group">
                            <label >Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="text" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
                        </div>
                        <input type="submit" name="login" class="btn btn-info my-3" value="Login">
                        <p>I don't Have an Account?<a href="#">Register</a></p>
                    </form>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
    </body>
</html>