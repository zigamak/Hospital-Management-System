<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Application Page</title>
</head>
<body style = "background-image:url(img/login.png);background-size:cover; background-repeat:no-repeat">
    <?php
        include("include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div col-md-3></div>
                <div col-md-6 my-5 jumbotron>
                    <h5>Apply Now!!!</h5>
                    <form method="post">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Select Gender</label>
                            <select name="gender" >
                                <option value=""> Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phonenumber</label>
                            <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Select Country</label>
                            <select name="gender" >
                                <option value=""> Select Country</option>
                                <option value="Russia">Russia</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" autocomplete="off" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="con_pass" autocomplete="off" class="form-control" placeholder="Confirm Password">
                        </div>
                        <input type="submit" name="apply" value="Apply Now" class="btn btn-success">
                        <p>I already have an account <a href="doctorlogin.php">Login</a></p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>