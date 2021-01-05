<?php
session_start();
?>

<?php
$link=mysqli_connect("localhost", "root","", "fundRaiserbd") or die(mysqli_error($link));
mysqli_select_db($link, "fundRaiserbd") or die(mysqli_error($link));
$db = new mysqli("localhost","root","", "fundRaiserbd");
?>

