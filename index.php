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
		<title>The Bug Barn</title>
	</head>

	<body>
		<?php
			require_once ("header.php");
		?>
		<div id = "main_blog">
			<?php
				require_once("blog_setup.php");
			?>
		</div>
		
		<?php
			require_once("footer.php");
		?>
		
	</body>
</html>