<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile </title>
</head>
<body>
    <?php
        include("../include/header.php");
        include("../include/connection.php");

        $ad = $_SESSION['admin'];
        $query = "SELECT * FROM admin WHERE username = '$ad'";
        $res=mysqli_query($connect,$query);

        while($row=mysqli_fetch_array($res)){
            $username=$row['username'];
            $profile=$row['profile'];
        }
            ?>

        

    <div class="container-fluid" >
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px;">
                <?php
                        include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">              
                                <h4><?php echo $username ;   ?>Profile</h4>

                                <form method="post" enctype="multipart/form-data">
                                <?php 
                                   echo " <img src='img/profile.png ' class='col-md-12'
                                    style='height:200px;' >";
                                ?>
                                </form>
                            </div>
                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>