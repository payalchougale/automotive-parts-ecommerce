<?php
include 'db.php';

$result=$conn->query("SELECT * FROM orders");

while($row=$result->fetch_assoc()){
echo "Order ID: ".$row['id']."<br>";
echo "Total: ".$row['total_price']."<br>";
echo "Status: ".$row['order_status']."<br><br>";
}
?>