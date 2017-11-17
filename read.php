<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Content-Type: application/json');

if(isset($_GET['dir'])){
	$t = scandir('./files/'.$_GET['dir']);unset($t[0]);unset($t[1]);$t = array_values($t);
}else{
	$t = scandir('./files');unset($t[0]);unset($t[1]);$t = array_values($t);
}
echo json_encode($t);