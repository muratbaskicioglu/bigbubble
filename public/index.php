<?php
	
	$requestUri = $_SERVER['REQUEST_URI'];

	switch($requestUri) {

		case "/":
			echo "Hello from Big Bubble world!";
			break;
	
		default:
			include("404.html");
	
	} 
				
?>
