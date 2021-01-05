<?php
include "connection.php";
error_reporting(0);
?>

<?php
$username=$_GET["del"];
mysqli_query($link,"delete from info where username= '$username' ");
?>

<?php
$delVol=$_GET["delVol"];
mysqli_query($link,"delete from addVolunteers where id= '$delVol' ");
?>

<?php
$delCon=$_GET["delCon"];
mysqli_query($link,"delete from addConsumer where id= '$delCon' ");
?>

<?php
$delDon=$_GET["delDon"];
mysqli_query($link,"delete from addDonor where id= '$delDon' ");
?>

<script type="text/javascript">
window.location="alluser.php";
</script>