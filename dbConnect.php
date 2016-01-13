<?php
 define('HOST','mysql.hostinger.in');
 define('USER','u502452270_andro');
 define('PASS','belal_123');
 define('DB','u502452270_andro');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

  $name = $_POST['name'];
  $address = $_POST['address'];


  $sql = "insert into Persons (name,address) values ('$name','$address')";
  if(mysqli_query($con,$sql)){
    echo 'success';
  }
  else{
    echo 'failure';
  }
  mysqli_close($con);
?>

 