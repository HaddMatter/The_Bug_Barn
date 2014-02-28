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
?>
