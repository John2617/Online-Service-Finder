<?php
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "service_finder";
$con = mysqli_connect($server, $uname, $pwd, $db) or die('Failed to connect');
$name = $_POST['uname'];
$email = $_POST['umail'];
$pass = $_POST['upass'];
$cpass = $_POST['cpass'];
$query = "insert into login values('$name','$email','$pass','$cpass')";
if ($result = mysqli_query($con, $query)) {
    echo "<script>alert('Register Successfully 😊');window.location.href='index.html';</script>";
} else {
    echo "Registration Error😒";
}
?>