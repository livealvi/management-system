<?php
    include "connection.php";

    $username=$_GET["edt"];

    $fullname="";
    $email="";
    $gender="";
    $blood="";

    $res=mysqli_query($link, "select * from info where username= '$username' ");

    while($row=mysqli_fetch_array($res))
    {
        $full_name=$row["full_name"];
        $email=$row["email"];
        $gender=$row["gender"];
        $blood=$row["blood"];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
         

        <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">Edit or Update User : <?php echo $username; ?> </p>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
                <div class="form" style="width: 350px;">
                    <form action="" method="post">
                        <!-- --- -->
                        <div class="form-group">
                            <label for="fullname">Full name</label>
                            <input class="form-control" type="text" name="full_name" placeholder="enter full name" value="<?php echo $full_name; ?>">
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="address">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="enter email" value="<?php echo $email; ?>">
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="nid">Gender</label>
                            <input class="form-control" type="text" name="gender" placeholder="enter gender" value="<?php echo $gender; ?>">
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="nid">Blood Group</label>
                            <input class="form-control" type="text" name="blood" placeholder="enter blood" value="<?php echo $blood; ?>">
                        </div>
                        <!-- --- -->
                        <br>
                        <a href="#"><button class="btn btn-success" name="update" style="width: 100%" >Update -
                                Submit</button></a>
                        <br><br>
                        <p class="text-center">OR</p>

                        <a href="alluser.php"></a> <button class="btn btn-primary" style="width: 100%;">Cancel</button></a>
                    </form>
                    <br><br><br><br>
                </div>
            

        </div>
    </div>
    

    <?php

    if(isset($_POST["update"]))
    {
        mysqli_query($link, "update info set email='$_POST[email]', full_name='$_POST[full_name]', gender='$_POST[gender]', blood='$_POST[blood]' where username = '$username' ");
        ?>
    <script type="text/javascript">
        window.location = "alluser.php";
    </script>
    <?php
    } 
    ?>





    <!-- main-js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="main.js" async defer></script>
</body>

</html>