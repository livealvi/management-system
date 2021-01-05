<?php
include "connection.php";
?>

<?php
 if(isset($_POST['submit'])){
    $volName = $_POST['name'];
    $password = $_POST['address'];
    $nid = $_POST['nid'];

    $query = "INSERT INTO addvolunteers(name, address, nid) VALUES ('$volName', '$password', '$nid')";
    $run = mysqli_query($db, $query);

    if($run){
        $messageReg = "Volunteer Add Successful!";
        echo "<script type='text/javascript'>alert('$messageReg');</script>";
        ?>
        <script type="text/javascript">
        window.location="alluser.php";
        </script>
        <?php
    }else{
        echo "error".mysqli_error($db);
        $messageReg = "Felid!";
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="30" height="30" alt="">
            </a>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="home.php">Home</a>
                    <a class="nav-item nav-link" href="alluser.php">All User<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="addvol.php">Add Volunteer</a>
                    <a class="nav-item nav-link" href="addcon.php">Add Consumer</a>
                    <a class="nav-item nav-link" href="adddon.php">Add Donor</a>
                    <a class="nav-item nav-link" href="allrev.php">All Review</a>  
                </div>
            </div>
        </div>
    </nav>

    <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">Add Volunteers</p>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
                <div class="form" style="width: 350px;">
                    <form action="" method="post">
                        <!-- --- -->
                        <div class="form-group">
                            <label for="fullname">Full name</label>
                            <input class="form-control" type="text" name="name" placeholder="enter full name" required>
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" type="text" name="address" placeholder="enter address" required>
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="nid">NID</label>
                            <input class="form-control" type="text" name="nid" placeholder="enter nid" required>
                        </div>
                        <!-- --- -->
                        <br>
                        <a href="#"><button class="btn btn-success" name="submit" style="width: 100%" >Create -
                                Submit</button></a>
                        <br><br>
                        <p class="text-center">OR</p>

                        <a href="#"></a> <button class="btn btn-primary" style="width: 100%;">Cancel</button></a>
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