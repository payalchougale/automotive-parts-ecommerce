<?php
include 'db.php';

$user_id=$_POST['user_id'];
$product_id=$_POST['product_id'];
$quantity=1;

$conn->query("INSERT INTO cart(user_id,product_id,quantity)
VALUES('$user_id','$product_id','$quantity')");
?>