<?php
	session_start();
	require ("user_connection.php");

	if(isset($_POST['login'])){
	$sql="SELECT * FROM user WHERE email=:email AND password=:password";
	$statement=$pdo->prepare($sql);

	$email = $_POST['email'];
	$password = $_POST['password'];

	$statement->bindParam(':email',$email,PDO::PARAM_STR);
	$statement->bindParam(':password',$password,PDO::PARAM_STR);
	$statement->execute();
	$count = $statement->rowCount();
	if($count==1){
		$_SESSION['email']=$email;
		header("location:Home.php");
	}else{
		echo "Invalid email or password";		}
	}
	$pdo=null;
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasjil | Login page | An easy way to enroll your children in school</title>
	<meta name="description" content="You can enroll your children in school without go to schools just do this online">
	<link rel="icon" type="image/png" href="img/logo.PNG">
	<meta name="keywords" content="Registration, online registration, schools, schools registration">
	<meta name="author" content="Mays Alkhandakji">
</head>

<body style="background-color: #A5DBDC;">

	<style>
		input{
			font-size: 1em;
			font-family: serif;
		}
		
		button{
			background-color:#3F7C88;
			border-color:#3F7C88;
			border-radius: 20px 20px;
			color:#A5DBDC;
			width: 300px;
			font-family: serif;
			font-size: 1.1em;
		}

		div img{
			width: 380px;
			height: 280px;
		}

		div label{
			color: #3F7C88;
			font-size: 1.3em;
		}
	</style>
	
	<center>
	<form method="post" id="login">
		<div>
			<center><img src="img/logo.png" alt="Website logo"></center>
		</div><br><br>

		<div>
			<label for='email'>Email:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;<input type='email' id='email' name='email' placeholder='Enter your email'><br><br>
			
			<label for='pass'>Password:</label>&ensp;&ensp;<input type='password' id='pass' name='password' placeholder="******"><br><br><br>

			<button type='submit' name="login">Login</button><br><br> Or <br><br>
			<a href="SignUp.php"><button type="button">Sign up</button></a>
		</div>
	</form>
	</center>

</body>

</html>