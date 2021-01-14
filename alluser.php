<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>All User</title>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="home.php">Home</a>
                    <a class="nav-item nav-link active" href="alluser.php">All User<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="addvol.php">Add Volunteer</a>
                    <a class="nav-item nav-link" href="addcon.php">Add Consumer</a>
                    <a class="nav-item nav-link" href="adddon.php">Add Donor</a>
                    <a class="nav-item nav-link" href="allrev.php">All Review</a> 
                    <a class="nav-item nav-link" href="logout.php">Logout</a> 
                </div>
            </div>
        </div>
    </nav>

    <div class="float-center" style="padding-top:30px; padding-bottom: 30px; font-size: 30px;">
        <p class="text-center">All User Data Table</p>
    </div>
    <!-- alluser table -->
    <div class="container">
        <caption>All User</caption>
        <div class="d-flex justify-content-center">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">username</th>
                        <th scope="col">email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Modify Data</th>
                    </tr>
                </thead>

                <?php
$res=mysqli_query($link, "select *from info");
while($row=mysqli_fetch_array($res))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>"; echo $row["full_name"]; echo "</td>";
    echo "<td>"; echo $row["username"]; echo "</td>";
    echo "<td>"; echo $row["email"]; echo "</td>";
    echo "<td>"; echo $row["gender"]; echo "</td>";
    echo "<td>"; echo $row["DOB"]; echo "</td>";
    echo "<td>"; echo $row["blood"]; echo "</td>";
    echo "<td>"; ?>
                <a href="delete.php?del=<?php echo $row["username"]; ?>"><button class="btn btn-danger"
                        type="button">Delete User</button></a>
                <a href="edit.php?edt=<?php echo $row["username"]; ?>"><button class="btn btn-success"
                        type="button">Edit User</button></a>
                <?php echo "</td>";
    echo "</tr>";
    echo "</tbody>";
}
?>
            </table>
        </div>
    </div>
        <!-- alluser table -->

    <br><br><br>

    <!-- Vol table-->
    <div class="container">
        <caption>All Volunteers</caption>
        <div class="d-flex justify-content-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Adders</th>
                        <th scope="col">NID</th>
                        <th scope="col">Modify Data</th>
                    </tr>
                </thead>

                <?php
$res=mysqli_query($link, "select *from addvolunteers");
while($row=mysqli_fetch_array($res))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
    echo "<td>"; echo $row["name"]; echo "</td>";
    echo "<td>"; echo $row["address"]; echo "</td>";
    echo "<td>"; echo $row["nid"]; echo "</td>";
    echo "<td>"; ?>
                <a href="delete.php?delVol=<?php echo $row["id"]; ?>"><button class="btn btn-danger"
                        type="button">Delete User</button></a>
                <a href="edit.php?edt=<?php echo $row["id"]; ?>"><button class="btn btn-success" type="button"
                        disabled>Edit User</button></a>
                <?php echo "</td>";
    echo "</tr>";
    echo "</tbody>";
}
?>
            </table>
        </div>
    </div>
    <!-- Vol table-->
    <br><br><br>

    <!-- Consumer table-->
    <div class="container">
        <caption>All Consumers</caption>
        <div class="d-flex justify-content-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Adders</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Modify Data</th>
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
    echo "<td>"; ?>
                <a href="delete.php?delCon=<?php echo $row["id"]; ?>"><button class="btn btn-danger"
                        type="button">Delete User</button></a>
                <a href="edit.php?edtCon=<?php echo $row["id"]; ?>"><button class="btn btn-success" type="button"
                        disabled>Edit User</button></a>
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
    <!-- donor table-->
<div class="container">
        <caption>All Donors</caption>
        <div class="d-flex justify-content-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Adders</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Total Donate</th>
                        <th scope="col">Last Donation</th>
                        <th scope="col">Modify Data</th>
                    </tr>
                </thead>

                <?php
$res=mysqli_query($link, "select *from addDonor");
while($row=mysqli_fetch_array($res))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
    echo "<td>"; echo $row["name"]; echo "</td>";
    echo "<td>"; echo $row["address"]; echo "</td>";
    echo "<td>"; echo $row["age"]; echo "</td>";
    echo "<td>"; echo $row["gender"]; echo "</td>";
    echo "<td>"; echo $row["blood"]; echo "</td>";
    echo "<td>"; echo $row["totalDonate"]; echo "</td>";
    echo "<td>"; echo $row["donateDate"]; echo "</td>";
    echo "<td>"; ?>
                <a href="delete.php?delDon=<?php echo $row["id"]; ?>"><button class="btn btn-danger"
                        type="button">Delete User</button></a>
                <a href="edit.php?edtDon=<?php echo $row["id"]; ?>"><button class="btn btn-success" type="button"
                        disabled>Edit User</button></a>
                <?php echo "</td>";
    echo "</tr>";
    echo "</tbody>";
}
?>
            </table>
        </div>
    </div>
    <!-- donor table-->


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