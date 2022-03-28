<?php include 'view/header.php';?>
<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	header("location:student_help/index.php");
	exit;
}
require('data/database.php');

$username = $password = "";
$username_error = $password_error = $login_error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty(trim($_POST["username"]))){
		$username_error = "Please enter username.";
	}else{
		$username = trim($_POST["username"]);
	}
	
	if(empty(trim($_POST["password"]))){
		$password_error = "Please enter your password.";
	} else{
		$password = trim($_POST["password"]);
	}
	
	if(empty($username_error) && empty($password_error)){
		$query = "SELECT userID, username, password FROM users
				  WHERE username = :username";
				  
		if($statement = $db->prepare($query)){
			$statement->bindParam(":username", $param_username, PDO::PARAM_STR);
			
			$param_username = trim($_POST["username"]);
			
			if($statement->execute()){
				
				if($statement->rowCount() == 1){
					if($row = $statement->fetch()){
						$userID = $row["userID"];
						$username = $row["username"]; 
						$hashed_password = $row["password"];
						if($password === $hashed_password){
								session_start();
								
								$_SESSION["loggedin"] = true; 
								$_SESSION["userID"] = $userID; 
								$_SESSION["username"] = $username; 
								
								header("location:student_help/index.php");
						}else{
								$login_error = "Password error.";
						}
					}
				}else{
							$login_error = "Username error.";
						}
			}else{
					echo "check fetch results error ";
				}
						
						unset($statement);
	}
 }
			
			unset($db);
}
?>

<body>
	<h2>Login</h2>
	<?php
	if(!empty($login_error)){
		echo $login_error;
	}
	?>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<label>Username</label>
		<input type="text" name="username" <?php echo (!empty($username_error)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
			<span><?php echo $username_error; ?>
			</span>
		<br>
		
		<label>Password</label>
		<input type="password" name="password" <?php echo (!empty($password_error)) ? 'is-invalid' : ''; ?>>
		<span><?php echo $password_error;?>
		</span>
		<br>
		
		<input type="submit" value="Login">
	</form>
</body>
	
	
<?php include 'view/footer.php';?>