<html>
	<head>
	
	</head>
	
	<body>
		<?php
			function validate($value1, $value2){
					if ($value1 == $value2){
						return true;
					}else{
						return false;
					}
			}
			
			function mysql_start(){
				$host = "localhost";
				$dbname = "roaches";
				$user = "root";
				$pass = "ykcud217";
				
				$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				
				return $DBH;
			}
			
			function empty_field($required){
				$error = false;
				
				foreach($required as $req){
					if(empty($_POST[$req])){
						$error = true;
					}
				}
				return $error;
			}
			
			function pw_check($password){
				if(strlen($password) <= 7){
					return false;
				} elseif(strpbrk($password, "1234567890") == false){
					return false;
				} else{
					return true;
				}
			}	
			
			function check_comment($subject, $comment){
				if (($subject != "") && ($comment != "")){
					return true;
				} else{
					return false;
				}
			}
			
			function email_check($email){
				if(strpbrk($email, "@") == false){
					return false;
				} else{
					return true;
				}
			}
			
			function check_reg($required){
				if(empty_field($required)){
					return 1;
				} else if(pw_check($_POST["password"]) == false){
					return 2;
				} else if(validate($_POST["password"], $_POST["confirm"]) == false){
					return 3;
				} else if(email_check($_POST["email"]) == false){
					return 4;
				} else{
					return 0;
				}
			}
		?>
	</body>
</html>