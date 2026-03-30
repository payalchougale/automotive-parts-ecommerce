<?php
include 'db.php';

if(isset($_GET['category']) && $_GET['category'] != ""){
    $category=$_GET['category'];
    $result=$conn->query("SELECT * FROM products WHERE category='$category'");
}else{
    $result=$conn->query("SELECT * FROM products");
}

$products=[];

while($row=$result->fetch_assoc()){
    $products[]=$row;
}

echo json_encode($products);
?>