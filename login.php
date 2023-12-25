<html>

<body>
	<h1>Login Page</h1>
	<form action="login.php" method="post">
		
		<label for="uname">Username:</label>
		<input type="text" name="uname"><br><br>

		<label for="pwd">Password:</label>
		<input type="password" name="pwd"><br><br>

		<input type="submit" value="Login">

	</form>

	<?php
		if(isset($_POST['uname']) and isset($_POST['pwd'])) {
			$uname = $_POST['uname'];
			$pwd = $_POST['pwd'];
			if($uname != null and $pwd != null) {	
				include('sql_connect.php');
				try {
					$result = $db->query("SELECT id from users where username='$uname' and password='$pwd'");
					$result = $result->fetch(PDO::FETCH_ASSOC);
					if($result) {
						header("Location: profile.php?id=$result[id]");
					} else echo "Username or Password wrong!";
				} catch (PDOException $e) {
					print("Error!" . $e->getMessage());
					die();
				} 
			} else echo "Login failed!";
		}

	?>


</body>

</html>
