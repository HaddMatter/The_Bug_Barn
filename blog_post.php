<?php  
	require_once("functions.php");

	try{
		date_default_timezone_set("America/New_York");				
		$date = date("Y-m-d");
		
		$DBH = mysql_start();
		
		$STH = $DBH -> prepare("INSERT INTO blog_posts ( title, content, date ) values (?, ?, ?)");
						
		$STH->bindParam(1, $_POST["title"]);
		$STH->bindParam(2, $_POST["content"]);
		$STH->bindParam(3, $date);

		$STH->execute();
	}
	catch(PDOException $e){
		echo $e->getMessage;
	}
?>