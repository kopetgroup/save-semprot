<?php
if(isset($_GET['save'])){
	$data = file_get_contents('php://input');
	if(isset($_GET['domain'])){
		$d = $_GET['domain'];
	}else{
		$d = 'other';
	}
	$fl = './files/'.$d;
	if(file_exists($fl)){}else{
		mkdir($fl,0755,true);
	}
	echo file_put_contents($fl.'/'.$_GET['save'],json_decode($data));
}else{
	
}
