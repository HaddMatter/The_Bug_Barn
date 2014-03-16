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
				<li><a href="#tabs-6">Create MySQL Db</a></li>
			</ul>
			<div id = "tabs-1">				
				<div class = 'contact_container'>
					<div>
						<p class='label'>Title</p>
						<input type="text" id="title">
					</div>
					<div>
						<p class='label'>New Blog Post</p>
						<textarea id="content"></textarea>
					</div>
					<button id="PostBlog" type='submit'>Submit</button>
				</div>
			</div>
			<div id = "tabs-2">
				<div class = 'contact_container'>
					<p class='label'>Select a User</p>
					<p><select class='sel' id = "user">
						<?php
							require_once("functions.php");
	
							try{
								$DBH = mysql_start();
			
								$STH = $DBH->query('SELECT username from people');  
  								$STH->setFetchMode(PDO::FETCH_ASSOC);  
	  
	
								while($row = $STH->fetch()) {  
									echo "<option>";
									echo $row["username"];
									echo "</option>";
								}
							}
							catch(PDOException $e) {  
								echo $e->getMessage();
							}
						?>
					</select></p>
					<p class='label'>Select New Permission</p>
					<p><select class='sel' id = "perm">
						<option value = 'member'>Member</option>
						<option value = 'admin'>Admin</option>
					</select></p>
					<button id = "ChangePermission" type = "submit">Submit</button>
				</div>
			</div>
			<div id = "tabs-3">
				<div class = 'contact_container'>
					<div>
						<p class='label'>Title</p>
						<input type="text" id="item_name">
					</div>
					<div>
						<p class='label'>Description</p>
						<input type="text" id="description">
					</div>
					<div>
						<p class='label'>Cost</p>
						<input type="text" id="cost">
					</div>
					<div>
						<p class='label'>Image Location</p>
						<input type="text" id="image">
					</div>
					<button id="CreateItem" type='submit'>Submit</button>
				</div>
			</div>
			<div id = "tabs-4">
			</div>
			<div id = "tabs-5">
			</div>
			<div id = "tabs-6">
			</div>
		</div>
		
		<a href = "index.php">Back to Home</a>
		
		<?php
			require_once ("footer.php");
		?>
	</body>
</html>
