<?php
	// determine the absolute path to the style sheet main.css
	$uri = $_SERVER['REQUEST_URI'];
	$dirs = explode('/', $uri);
	$i = 1;
	$path = '/';
	
	while ($dirs[$i] != "ch05_ex1") {
		$path .= $dirs[$i] . '/';
		$i += 1;
	}
	$path .= "ch05_ex1/";
	echo(alert($path);)
?>


<!DOCTYPE html>
<html>
	<!-- the head section -->
	<head>
		<title>My Guitar Shop</title>
		<link rel="stylesheet" type="text/css"
			  href="/ex_starts/ch05_ex1/main.css">
	</head>

	<!-- the body section -->
	<body>
	
	<header>
		<h1>My Guitar Shop</h1>
	</header>
