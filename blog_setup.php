<?php
	$posts = 0;
	require_once("functions.php");
	
	try{
		$DBH = mysql_start();
			
		$STH = $DBH->query('SELECT title, content, date from blog_posts');  
  		$STH->setFetchMode(PDO::FETCH_ASSOC);  
	  
	
		while($row = $STH->fetch()) {  
			echo "<div class = 'blog'><div class = 'blog_header'>";
			echo $row["title"]. " - " .$row["date"];
			echo "</div><div class = 'blog_body'>";
			echo $row["content"];
			echo "</div></div>";
		}
	}
	catch(PDOException $e) {  
		echo $e->getMessage();
	}

	if ($_SESSION["permission"] == "admin"){
		echo "<div class = 'contact_container'><form action='blog_post.php' method='post'>
			<label>title</label>
			<input type = 'text' name = 'title'><br/>
			<label>New Blog Post</label>
			<textarea name='content' id='blog'></textarea><br />
			<p><input type='submit' value='Submit' /></p>
			</form></div>";
	}
?>