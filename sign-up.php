<?php 
ob_start();
session_start ();
require ('connections/connect.php');
function NewUser() { 
$fullname = $_POST['name']; 
$password = $_POST['password']; 
$query = "INSERT INTO users (name,password) VALUES ('$fullname','$password')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) 
{ 
echo "Registration complete!" ; 

 } 
 function SignUp() { 
 if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
 { 
 $query = mysql_query("SELECT * FROM users WHERE name = '$_POST[name]' AND password = '$_POST[password]'") or die(mysql_error()); 
 if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
 { newuser(); 
} 
else { echo "You have already registered."; } 
} 
}
 
if(isset($_POST['submit'])) { SignUp(); 
} 
?>