<html>
	<?php  
		require_once("functions.php");

		try{
			$DBH = mysql_start();
			
			$STH = $DBH->prepare("UPDATE people SET permissions = ? WHERE username = ?");

			$STH->bindParam(2, $_POST["user"]);
			$STH->bindParam(1, $_POST["perm"]);

			$STH->execute();
		}
		catch(PDOException $e){
			echo $e->getMessage;
		}
	?>
</html>
