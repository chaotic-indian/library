<?php 
require ('../connections/connect.php');
$user_id= mktime();
$name2=strtolower ($_POST['name']);

$name=ucwords ($name2);

$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$status = $_POST['status'];
//$edition=$_POST['edition'];
//$isbn = $_POST['isbn'];

$sqlb="insert into users (`name`,`address`,`phone`,`password`,`status`) values('$name','$_POST[address]','$_POST[phone]','$_POST[password]','$_POST[status]')" or die(mysql_error());
mysql_query($sqlb) or die(mysql_error());



echo "<font color='red'><b>$name</b></font> has been saved successfully.
click <a href = 'user.php'>here</a> to go back"

?>




