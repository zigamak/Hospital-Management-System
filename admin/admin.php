<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php
    include ("../include/header.php")
    ?>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2" style="margin-left: -30px;">
                <?php
                include 'sidenav.php';
                include ('../include/connection.php');
                ?>
            </div>
            <div class="col-md-10">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-center"> All Admin</h5>

                            <?php
                            $ad=$_SESSION['admin'];
                            $query = "SELECT * FROM admin WHERE username !='$ad'";
                            $res=mysqli_query($connect,$query);

                            $output = "
                            <table class='table table-bordered'>
                            <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th style='width:10%;'>Action</th>
                            <tr>
                            ";
                            
                            if (mysqli_num_rows($res)<1){
                                $output .= "
                                <tr>
                                <td colspan = '2' class='text-center'> No New Admin </h5>
                                <tr>
                                ";
                            } 
                            while ($row = mysqli_fetch_array($res)){
                                $id=$row['id'];
                                $username = $row['username'];

                                $output .="
                                <tr>
                                <td>$id</td>
                                <td>$username</td>
                                <td>
                                    <button id='$id' class='btn btn-danger remove'>Remove  </button>
                                </td>
                            
                                ";
                            }
                            $output .="
                            </tr>
                            </table>
                            ";

                            echo $output; 

                            ?>

                        
                                
                           
                        </div>
                        <div class="col-md-6">
                            <?php
                                if (isset($_POST['add']))
                                $uname = $_POST ['uname'];
                                $password= $_POST['password'];
                                $image=$_POST['img']['name'];

                                $error=array();
                            ?>
                            <h5 class="text-center"> Add Admin</h5>
                            <form method = "post" enctype="multipart/form-data">
                            <div class="form-group" >
                                <label>Username</label>       
                                <input type="text" name="uname" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control">                                                       
                            </div>
                            <div class="form-group">
                                <label>Admin Pciture</label>
                                <input type="file" name="pass" class="form-control">                                                       
                            </div><br>
                            <input type="submit" name="add" value="Add new admin" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>