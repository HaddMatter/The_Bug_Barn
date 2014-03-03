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
		<link rel='stylesheet' type='text/css' href= "css/jqueryui.css"/>
		<script src="js/jquery.js"></script>
		<script src="js/jqueryui.js"></script>
		<script src="shop.js"></script>
		<title>The Bug Barn - shop</title>
	</head>
	
	<body>
		<?php
			require_once ("header.php");
		?>
		
		
		<div id = "shop_menu">
			<h3>Dubia Roaches</h3>
				<div>
					<p>Adult Roaches</p>
					<p>Nits</p>
					<p>Instant Colonies</p>
				</div>
			<h3>Roach Accessories</h3>
				<div>
					<p>Gut load</p>
				</div>
			
			<h3>Other Things</h3>
				<div>
					<p>say something else</p>
				</div>
		</div>
		
		<div id = "main_shop">
			<?php
				require_once("functions.php");
				try{
					$DBH = mysql_start();
			
					$STH = $DBH->query('SELECT cost, title, descr from shop_items');  
					$STH->setFetchMode(PDO::FETCH_ASSOC);  
	  
					$counter = 0;
					while($row = $STH->fetch()) { 
						if ( $counter == 3 ){
							$class_name = "shop_item_nl";
							$counter = 0;
						}
						else {
							$class_name = "shop_item";
						}
						$counter ++;
						echo "<div class = " .$class_name. ">";
						echo "<p>" .$row["title"]. "</p>";
						echo "<p>$" .number_format($row["cost"], 2). "</p>";
						echo "<p>" .$row["descr"]. "</p>";
						echo "</div>";
					}
				}
				catch(PDOException $e) {  
					echo $e->getMessage();
				}
				
			?>
		</div>
		
		<?php
			require_once("footer.php");
		?>
	</body>
</html>