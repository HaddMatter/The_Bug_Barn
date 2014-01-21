<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>Neal's Roaches - FAQ</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
	
		<h1>Below you can find our FAQ and Hot-to's when it comes to roaches!</h1>
		<p>here we will cover everything from care and breeding to nutritional information and keeping</p>
	</body>
</html>