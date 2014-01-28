<?php
	session_start();
	if(!isset($_SESSION["count"])){
		$_SESSION["count"] = 0;
	} else{
		$_SESSION["count"]++;
	}
	
	if(!isset($SESSION["username"])){
		$_SESSION["username"] = "";
	}
?>

<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"/>
		<title>The Bug Barn - Thank you!</title>
	</head>
	<body>
		<?php 
			require_once("header.php");
			require_once("functions.php");
			require_once("classes.php");
		
			$comment_code = check_comment($_POST["subject"], $_POST["comments"]);
			if($comment_code){
				echo "<h1>Thank You for you input! We will get back to you as soon as possible.</h1>";
				$comment = new comment;
				$comment->create();
			}
			else{
				echo "<h1>Oops! did you fill out the form entirely?</h1>";
				echo "<p><a href = 'login.php' style = 'color: green; text-align: center;'>Try Again!</a></p>";
			}
			
			require_once("footer.php");
		?>
	</body>
</html>
