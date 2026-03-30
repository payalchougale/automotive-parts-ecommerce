<?php
include 'db.php';

$name=$_POST['name'];
$price=$_POST['price'];
$category=$_POST['category'];
$stock=$_POST['stock'];

$sql="INSERT INTO products(name,price,category,stock)
VALUES('$name','$price','$category','$stock')";

$conn->query($sql);

echo "Product added successfully";
?>