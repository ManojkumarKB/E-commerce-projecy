<?php
session_start();    
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
include '../includes/common.php';
$insert_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$insert_query_result=mysqli_query($con,$insert_query);
header("location:product.php");
?>