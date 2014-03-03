<?php  
	require_once("functions.php");

	try{
		$DBH = mysql_start();
		
		$STH = $DBH -> prepare("INSERT INTO shop_items ( title, descr, cost, img_loc ) values (?, ?, ?, ?)");
						
		$STH->bindParam(1, $_POST["item_name"]);
		$STH->bindParam(2, $_POST["description"]);
		$STH->bindParam(3, $_POST["cost"]);
		$STH->bindParam(4, $_POST["image"]);

		$STH->execute();
	}
	catch(PDOException $e){
		echo $e->getMessage;
	}
?>