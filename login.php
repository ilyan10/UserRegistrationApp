<?php
define('HOST','mysql.hostinger.in');
define('USER','u919845258_user');
define('PASS','ilyan100');
define('DB','u919845258_db');
 
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to connect');
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "select * from users where username='$username' and password='$password'";
 
$res = mysqli_query($con,$sql);
 
$check = mysqli_fetch_array($res);
 
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
 
mysqli_close($con);
?>