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
		<title>Neal's Roaches - Your Cart</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
		
		<p>allow users to see items they have chosen to purchase and change quantities</p>
	</body>
</html>