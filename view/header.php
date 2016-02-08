<?php 


	function locateMainCssFile(){
		$path = '';
		$dir = ['/view/', '//../view/'];
		
		if (file_exists(dirname($dir[0]))) {
			$path = $dir[0];
		} else {
			$path = $dir[1];
		}
		return $path;
	}


?> 




<!DOCTYPE html>
<html>
	<!-- the head section -->
	<head>
		<title>My Guitar Shop</title>
		<link rel="stylesheet" type="text/css"
			  href = "<?php locateMainCssFile() ?>main.css">
	</head>

	<!-- the body section -->
	<body>
	
	<header>
		<h1>My Guitar Shop</h1>
	</header>
