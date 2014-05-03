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
		
		<h1>About Us</h1>
		<p margin="Auto">Welcome to the Bug Barn. We are a Manchester,NH based reptile supply company, specializing in feeder insects. We provide only the best feeders and devote ourselves to providing the best in nutritional feeders at reasonable prices.</p>
		
		<?php
			require_once ("footer.php");
		?>
	</body>
</html> 