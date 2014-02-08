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
		<link rel='stylesheet' type='text/css' href= "css/jqueryui.css"/>
		<script src="js/jquery.js"></script>
		<script src="js/jqueryui.js"></script>
		<script src="admin.js"></script>
		<title>The Bug Barn - Admin Page</title>
	</head>
	
	<body>
		<?php
			if($_SESSION["permission"] != "admin"){
				echo "<meta http-equiv='refresh' content='0;URL=blocked.php' />";
			}
		?>
		
		<p>Admin Panel</p>

		<div id = "admin_menu">
			 <ul>
				<li><a href="#tabs-1">Blog Post</a></li>
				<li><a href="#tabs-2">Set Permissions</a></li>
				<li><a href="#tabs-3">Add Shop Item</a></li>
				<li><a href="#tabs-4">Change About Page</a></li>
				<li><a href="#tabs-5">Add FAQ Info</a></li>
			</ul>
			<div id = "tabs-1">				
				<div class = 'contact_container'>
					<form action='blog_post.php' method='post'>
						<label class = 'label'>Title</label>
						<input type = 'text' name = 'Title'><br/>
						<label class = 'label'>New Blog Post</label>
						<textarea name='content' id='blog'></textarea><br />
						<input type='submit' value='Submit' />
					</form>
				</div>
			</div>
			<div id = "tabs-2">
				
			</div>
			<div id = "tabs-3">
			</div>
			<div id = "tabs-4">
			</div>
			<div id = "tabs-5">
			</div>
		</div>
	</body>
</html>
