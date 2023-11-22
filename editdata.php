<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type');
header('Content-Type: application/json');

	include 'conn.php';
	
	$id = $_POST['id'];
	$itemcode = $_POST['item_code'];
	$itemname = $_POST['item_name'];
	$price = $_POST['price'];
	$stock= $_POST['stock'];
	
	$connect->query("UPDATE tb_item SET item_code='".$itemcode."', item_name='".$itemname."', price='".$price."', stock='".$stock."' WHERE id=". $id);


?>