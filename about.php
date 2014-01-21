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
		<title>Neal's Roaches - About Us</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
		
		<h1>WELCOME!</h1>
		<p>Hi! we're Neal's roaches. We sell dubia Roaches which are terrific feeders for your reptiles!</p>
	</body>
</html>