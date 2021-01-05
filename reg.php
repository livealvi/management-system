<?php
include "connection.php";
error_reporting(0);
?>

<?php
 if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $full_name  = $_POST['full_name'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    $DOB = $_POST['DOB'];

    $query = "INSERT INTO info(username, password, email, full_name, gender, blood, DOB) VALUES ('$username', '$password', '$email', '$full_name', '$gender', '$blood', '$DOB')";
    $run = mysqli_query($db, $query);

    if($run){
        $messageReg = "Registration Successful!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
        ?>
        <script type="text/javascript">
        window.location="index.php";
        </script>
        <?php
    }else{
        echo "error".mysqli_error($db);
        $messageReg = "Registration Felid!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
    }
 }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">Welcome to Fund Raiser BD</p>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">

            
                <div class="form" style="width: 350px;">
                    <form action="" method="post" class="reg-form">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="enter username" required>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="enter password" required>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="enter email id" required>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label for="fullname">Full name</label>
                            <input class="form-control" type="text" name="full_name" placeholder="enter full name" required>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label class="form-check-label" for="Gender">Gender</label>
                            <input class="radio-inline form-check-label" type="radio" name="gender" value="male" required>
                            <label class="form-check-label" for="Gender">Male</label>
                            <input class="radio-inline form-check-label" type="radio" name="gender" value="female">
                            <label class="form-check-label" for="Gender">Female</label>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label for="blood">Blood Group</label>
                            <input class="form-control" type="text" name="blood" placeholder="enter blood group" required>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label for="DOB">Date of Birth</label>
                            <input type="date" name="DOB" required>
                        </div>
                        <!-- --- -->
                        <br>
                        <a href="#"><button class="btn btn-success" name="submit" style="width: 100%" >Create -
                                Submit</button></a>
                        <br><br>
                        <p class="text-center">OR</p>

                        <a href="#"></a> <button class="btn btn-primary" style="width: 100%;">Already Registred?
                            Login</button></a>
                    </form>
                    <br><br><br><br>
                </div>
            

        </div>
    </div>




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