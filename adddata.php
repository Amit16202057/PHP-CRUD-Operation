<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type');
header('Content-Type: application/json');
	include 'conn.php';
	

	$itemcode = $_POST['itemcode'];
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$stock= $_POST['stock'];
	
	$connect->query("INSERT INTO tb_item (itemcode,itemname,price,stock) VALUES ('".$itemcode."','".$itemname."','".$price."','".$stock."')")


	
?>