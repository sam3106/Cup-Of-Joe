<?php
session_start();
$itemid = $_GET['id'];
$userid = $_SESSION['user_id']; 
$db= new PDO('mysql:host=localhost;dbname=coffeelogin', 'root','root');
$query_insert = "INSERT INTO cart SET user_id=".$userid.",item_id=".$itemid;
$db->exec($query_insert);
header("location: shop.php");
?>
