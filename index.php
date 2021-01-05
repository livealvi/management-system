<?php
include "connection.php";
error_reporting(0);
?>

<?php
 if(isset($_POST['login'])){
     $username = $_POST['loginUserName'];
     $password = $_POST['loginPassword'];

     $mysqli = new mysqli("localhost","root","", "fundRaiserbd");
     $result = $mysqli->query("SELECT * FROM info WHERE username ='$username' AND password = '$password' ");
     $row = $result->fetch_assoc();

     if($row['username'] == $username && $row['password'] == $password){
         $message = "Login Successful!";
         echo "<script type='text/javascript'>alert('$message');</script>";
         ?>
<script type="text/javascript">
    window.location = "home.php";
</script>
<?php
     }else{
         $messageUn = "Login Felid!";
         echo "<script type='text/javascript'>alert('$messageUn');</script>";
     }
 }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome to Fund Raiser BD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">Login - Fund Raiser BD</p>
        <img src="img/logo.png" class="rounded mx-auto d-block" style="size" alt="logo">
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
                <div class="form" style="width: 350px;">
                    <form action="index.php" method="post" class="login-form">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="loginUserName" placeholder="enter username"
                                required>
                        </div>
                        <!-- --- -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="loginPassword"
                                placeholder="enter password" required>
                        </div>
                        <br>
                        <a href=""></a> <button name="login" class="btn btn-primary"
                            style="width: 100%;">Login</button></a>
                            <br><br>
                        <p class="">Not Registered?<a href="reg.php?"> Register Here</a></p>
                    </form>
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