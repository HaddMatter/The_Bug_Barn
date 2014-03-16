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
		<title>The Bug Barn - Contact</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
	
		<div class = "contact_container">
			<p>this page will allow users to register complaints and praise for our services</p>
			<p>create a form to send us an email with the feedback</p>
			
			<form action="contact_action.php" method="post">
				<label>Subject:</label><input type="text" name="subject"><br />
				<p></p>
				<label>Comments:</label>
				<textarea name="comments" id="comments"></textarea><br />
				<p><input type="submit" value="Submit" /></p>
			</form>
		</div>
		
		<?php
			require_once ("footer.php");
		?>
	</body>
</html>