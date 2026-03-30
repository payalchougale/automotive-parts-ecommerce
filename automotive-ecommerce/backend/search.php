<?php
include 'db.php';

$keyword=$_GET['keyword'];

$result=$conn->query("SELECT * FROM products WHERE name LIKE '%$keyword%'");

$products=[];

while($row=$result->fetch_assoc()){
$products[]=$row;
}

echo json_encode($products);
?>