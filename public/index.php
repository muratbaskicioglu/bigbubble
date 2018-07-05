<?php

	define("TEMPLATE_DIR", "../template/");
	define("LAYOUT_DIR", TEMPLATE_DIR . "layout/");
	
	require_once(LAYOUT_DIR . "header.php");
		
	$requestUri = $_SERVER['REQUEST_URI'];

	switch($requestUri) {

		case "/":
			echo "Hello from Big Bubble world!";
			break;
	
		default:
			include("404.html");
	
	}

	require_once(LAYOUT_DIR . "footer.php");
				
?>
