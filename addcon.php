<?php
include "connection.php";
?>

<?php
 if(isset($_POST['submit'])){
    $conName = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $problem = $_POST['problem'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO addConsumer(name, address, age, gender, problem, comment) VALUES ('$conName', '$address', '$age', '$gender', '$problem', '$comment')";
    $run = mysqli_query($db, $query);

    if($run){
        $messageReg = "Consumer Add Successful!";
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
    <title>Add Consumer</title>
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
                    <a class="nav-item nav-link" href="addvol.php">Add Volunteer</a>
                    <a class="nav-item nav-link active" href="addcon.php">Add Consumer</a>
                    <a class="nav-item nav-link" href="adddon.php">Add Donor</a>
                    <a class="nav-item nav-link" href="allrev.php">All Review</a>  
                </div>
            </div>
        </div>
    </nav>

    <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">Add Consumer</p>
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
                            <label for="age">Age</label>
                            <input class="form-control" type="text" name="age" placeholder="enter age" required>
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label class="form-check-label" for="Gender">Gender</label>
                            <input class="radio-inline form-check-label" type="radio" name="gender" value="male" required>
                            <label class="form-check-label" for="Gender">Male</label>
                            <input class="radio-inline form-check-label" type="radio" name="gender" value="female">
                            <label class="form-check-label" for="Gender">Female</label>
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="problem">Problem</label>
                            <textarea class="form-control" name="problem" rows="3"  placeholder="enter problem..." required></textarea>
                            <!-- <input class="form-control" type="text" name="problem" placeholder="problem..." required> -->
                        </div>
                        <!-- --- -->
                        <!-- --- -->
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" name="comment" rows="3"  placeholder="enter comment..." required></textarea>
                        </div>
                        <!-- --- -->
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