<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>All Reviews</title>
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
                    <a class="nav-item nav-link" href="alluser.php">All User</a>
                    <a class="nav-item nav-link" href="addvol.php">Add Volunteer</a>
                    <a class="nav-item nav-link" href="addcon.php">Add Consumer</a>
                    <a class="nav-item nav-link" href="adddon.php">Add Donor</a>
                    <a class="nav-item nav-link active" href="allrev.php">All Review</a> 
                </div>
            </div>
        </div>
    </nav>

    <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">All Reviews</p>
    </div>

    <!-- Consumer table-->
    <div class="container">
        <caption>All Consumer</caption>
        <div class="d-flex justify-content-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Adders</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Problem</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Modify</th>
                    </tr>
                </thead>

                <?php
$res=mysqli_query($link, "select *from addConsumer");
while($row=mysqli_fetch_array($res))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
    echo "<td>"; echo $row["name"]; echo "</td>";
    echo "<td>"; echo $row["address"]; echo "</td>";
    echo "<td>"; echo $row["age"]; echo "</td>";
    echo "<td>"; echo $row["gender"]; echo "</td>";
    echo "<td>"; echo $row["problem"]; echo "</td>";
    echo "<td>"; echo $row["comment"]; echo "</td>";
    echo "<td>"; ?>
                
                <a href="allrevEdit.php?edtConRev=<?php echo $row["id"] ?>"><button class="btn btn-success" type="button">Edit Problem & Comment</button></a>
                <?php echo "</td>";
    echo "</tr>";
    echo "</tbody>";
}
?>
            </table>
        </div>
    </div>
    <!-- Consumer table-->
<br><br><br>
    


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