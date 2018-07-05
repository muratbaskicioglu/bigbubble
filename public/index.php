<?php

	define("TEMPLATE_DIR", "../template/");
	define("LAYOUT_DIR", TEMPLATE_DIR . "layout/");
	
	require_once(LAYOUT_DIR . "header.php");
		
	$requestUri = $_SERVER['REQUEST_URI'];

	switch($requestUri) {

		case "/":
			$message = "Hello from Big Bubble world!";
			include(TEMPLATE_DIR . "home.php");
			header("Refresh: 2; Url=/signup");
			break;

		case "/signup":
			include(TEMPLATE_DIR . "signup.php");
			break;

		default:
			include("404.html");
	
	}

	require_once(LAYOUT_DIR . "footer.php");
				
?>
