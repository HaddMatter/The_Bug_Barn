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
		<title>The Bug Barn - My Account</title>
	</head>
	
	<body>
		<?php
			require_once("header.php");
			require_once("classes.php");
			
			$post = new blog();
			$post->create();
		?>
		
		<h1>Post Successful!</h1>
	</body>
</html>