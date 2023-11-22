<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type');
header('Content-Type: application/json');

$connect = new mysqli("localhost","root","","my_store");

if($connect){
	 
}else{
	echo "Connection Failed";
	exit();
}