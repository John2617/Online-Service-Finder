<?php
session_start();
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "service_finder";
$con = mysqli_connect($server, $uname, $pwd, $db) or die('db not connected');
$name = $_POST['uname'] and $password = $_POST['cpass'];
$que = "select * from login where uname='$name'";
$res = mysqli_query($con, $que);
if ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
    if ($row['cpass'] == $password) {


        echo "<script>alert('welcome $name 😊');window.location.href='homepage.php';</script>";
    } else {
        echo "<script>alert('Incorrect Password 😒');window.location.href='login.html';</script>";
    }
} else {
    echo "<script>alert('Incorrect Name 😒');window.location.href='login.html';</script>";
}

?>