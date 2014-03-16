<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
	if(!isset($_SESSION["username"])){
		$_SESSION["username"] = "";
	}
	if(!isset($_SESSION["permission"])){
		$_SESSION["permission"] = "member";
	}
	if(!isset($_SESSION["first"])){
		$_SESSION["first"] = "";
	}
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>The Bug Barn - Oops!</title>
	</head>
	
	<body>
		<h1>Oops! looks like you don't have permission to do that!</h1>
		<h3><a href = "index.php">Click here to return to the homepage!</a></h3>
		
		<?php
			require_once ("footer.php");
		?>
	</body>
</html>