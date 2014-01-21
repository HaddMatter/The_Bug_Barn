<html>
	<head>
	
	</head>
	
	<body>
		<?php
			require_once(".\PasswordHash.php");
			
			class blog{
				function create(){
					try{
						$host = "localhost";
						$dbname = "roaches";
						$user = "root";
						$pass = "";
						date_default_timezone_set("America/New_York");
						
						$date = date("Y-m-d");
						
						$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
						$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
						
						$STH = $DBH -> prepare("INSERT INTO blog_posts ( title, content, date ) values (?, ?, ?)");
						
						$STH->bindParam(1, $_POST["title"]);
						$STH->bindParam(2, $_POST["content"]);
						$STH->bindParam(3, $date);
						
						$STH->execute();
					}
					catch(PDOException $e) {  
						echo $e->getMessage();
						
					} 
				}
			}
			
			class user{
				function create(){
					try{
						$host = "localhost";
						$dbname = "roaches";
						$user = "root";
						$pass = "";
						$default_perm = "member";
						
						$hasher = new PasswordHash(8, false);
						$password = $_POST["password"];
						$hash = $hasher->HashPassword($password);
						
						$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
						$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
						
						$STH = $DBH -> prepare("INSERT INTO people ( username, password, first_name, last_name, email, permissions ) values (?, ?, ?, ?, ?, ?)");
						
						$STH->bindParam(1, $_POST["username"]);
						$STH->bindParam(2, $hash);
						$STH->bindParam(3, $_POST["first"]);
						$STH->bindParam(4, $_POST["last"]);
						$STH->bindParam(5, $_POST["email"]);
						$STH->bindParam(6, $default_perm);
						
						$STH->execute();
					}
					catch(PDOException $e) {  
						echo $e->getMessage();
						
					}  
				}
				
				function check_login(){
					
					try{
						$host = "localhost";
						$dbname = "roaches";
						$user = "root";
						$pass = "";
						
						$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
						$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
						
						$STH = $DBH->query('SELECT username, password, first_name, last_name, permissions from people');  
  
						$STH->setFetchMode(PDO::FETCH_ASSOC);  
	  
						while($row = $STH->fetch()) {  
							if( $row["username"] == $_POST["username"] ){
								$hasher = new PasswordHash(8,false);
								$password = $_POST["password"];
								$stored_hash = $row["password"];
								
								if($hasher->CheckPassword($password, $stored_hash)){
									$_SESSION["first"] = $row["first_name"];
									$_SESSION["last"] = $row["last_name"];
									$_SESSION["permission"] = $row["permissions"];
									
									return 0;
								} else{
									return 1;
								}
							}
						}
						return 2;
					}
					catch(PDOException $e) {  
						echo $e->getMessage();
						
					}  
					
					
				}
			}	
			
			class comment{
				function create(){
					try{
						$host = "localhost";
						$dbname = "roaches";
						$user = "root";
						$pass = "";
						
						$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
						$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
						
						$STH = $DBH -> prepare("INSERT INTO comments ( comment, subject ) values (?, ?)");
						
						$STH->bindParam(1, $_POST["comments"]);
						$STH->bindParam(2, $_POST["subject"]);
						
						$STH->execute();
					}
					
					catch(PDOException $e) {  
						echo $e->getMessage();	
					}
				}
			}
			
			class shop_item {
				function create(){
					try{
						$host = "localhost";
						$dbname = "roaches";
						$user = "root";
						$pass = "";
						
						$DBH = new PDO("mysql:host=$host;dbname=$dbname", $cost, $title, $desc, $img_location);
						$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
						
						$STH = $DBH -> prepare("INSERT INTO shop_items ( cost, title, desc, img_location ) values (?, ?, ?, ?)");
						
						$STH->bindParam(1, $_POST["username"]);
						$STH->bindParam(2, $hash);
						$STH->bindParam(3, $_POST["first"]);
						$STH->bindParam(4, $_POST["last"]);
						
						$STH->execute();
					}
					catch(PDOException $e) {  
						echo $e->getMessage();
						
					}
				}
			}
		?>
	</body>
</html>