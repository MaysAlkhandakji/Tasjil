<?php
require ("user_connection.php");
if($_SERVER['REQUEST_METHOD']== 'POST'){
	$sql="INSERT INTO user(first_name,last_name,email,password,city,street_name,mobile,guardian) values(:first_name,:last_name,:email,:password,:city,:street_name,:mobile,:guardian)";
	$statement=$pdo->prepare($sql);

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city=$_POST['city'];
	$street_name=$_POST['street_name'];
	$mobile=$_POST['mobile'];
	$guardian=$_POST['guardian'];

	$statement->bindParam(":first_name",$first_name,PDO::PARAM_STR);
	$statement->bindParam(":last_name",$last_name,PDO::PARAM_STR);
	$statement->bindParam(":email",$email,PDO::PARAM_STR);
	$statement->bindParam(":password",$password,PDO::PARAM_STR);
	$statement->bindParam(":city",$city,PDO::PARAM_STR);
	$statement->bindParam(":street_name",$street_name,PDO::PARAM_STR);
	$statement->bindParam(":mobile",$mobile,PDO::PARAM_INT);
	$statement->bindParam(":guardian",$guardian,PDO::PARAM_STR);

	$statement->execute();
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasjil | Sign up page | An easy way to enroll your children in school</title>
	<meta name="description" content="You can enroll your children in school without go to schools just do this online">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="keywords" content="Registration, online registration, schools, schools registration">
	<meta name="author" content="Mays Alkhandakji">
</head>

<body style="background-color: #A5DBDC;">

	<style>
		button{
			background-color:#3F7C88;
			border-color:#3F7C88;
			border-radius: 20px 20px;
			color: #A5DBDC;
			width: 250px;
		}
		form{
			font-size: 1.3em;
			color: #3F7C88;
			font-family: serif;
		}
		#G input{
			font-size: 1.2em;
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
		option{
			color: #3F7C88;
		}

	</style>
	<center><h1 style="color: #3F7C88; font-size: 3.5em;">Sign up</h1></center><br><br>
	<form method="post" id="signup">
		<div>
		<div><label for="fname"> First Name:  </label>&ensp;&ensp;<input type="text" id="fname" name="first_name" placeholder="Insert your first name"></div><br>

		<div><label for="lname"> Last Name:  </label>&ensp;&ensp;<input type="text" id="lname" name="last_name" placeholder="Insert your last name"></div><br>

		<div><label for='email'>Email:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type='email' id='email' name='email' placeholder='Insert your email'></div><br>

		<div><label for='pass'>Password:  </label>&ensp;&ensp;&ensp;<input type='password' id='passwprd' name='password' placeholder="Insert your password"></div><br>

		<div><label>City:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
		<select name="city">
			<option>Choose city</option>
			<option value="Amman">Amman</option>
			<option value="Irbid">Irbid</option>
			<option value="Zarqa">Zarqa</option>
			<option value="Jerash">Jerash</option>
			<option value="Aqapa">Aqapa</option>
			<option value="Ajloun">Ajloun</option>
			<option value="Salt">Salt</option>
			<option value="Kerak">Kerak</option>
			<option value="Madaba">Madaba</option>
			<option value="Tafilah">Tafilah</option>
			<option value="Ma'an">Ma'an</option>
			<option value="Ramtha">Ramtha</option>
		</select>

		&ensp;&ensp;<label for='street'>Street name:  </label>&ensp;&ensp;<input type='text' id='street' name='street_name' placeholder="Insert your street name"></div><br>

		<div><label for="num"> Mobile:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;<input type="text" id="num" name="mobile" placeholder="Insert your mobile number"></div><br>

		<div id="G"><label>Guardian:</label>&ensp;&ensp;
			<input type='radio' id='mother' name='guardian' value='Mother'><label for='mother'>Mother</label>
			<input type='radio' id='father' name='guardian' value='Father'><label for='father'>Father</label></div><br><br>

		<center><div><button type="submit" name="signup">Sign up</button></div></center>
	</div>
	</form>
</body>

</html>