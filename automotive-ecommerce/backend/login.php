<?php
include 'db.php';

$email=$_POST['email'];
$password=$_POST['password'];

$result=$conn->query("SELECT * FROM users WHERE email='$email'");
$user=$result->fetch_assoc();

if(password_verify($password,$user['password'])){
echo "Login success";
}else{
echo "Invalid login";
}
?>