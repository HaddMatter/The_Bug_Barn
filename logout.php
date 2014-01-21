<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
	
	$_SESSION["username"] = "";
	$_SESSION["first"] = "";
	$_SESSION["last"] = "";
	$_SESSION["permission"] = "";
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>Neal's Roaches - shop</title>
	</head>
	
	<body>
		<?php			
			require_once ("header.php");
		?>
		
		<h1>You have successfully logged out!<h1>
		
	</body>
</html>