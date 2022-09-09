<?php
	require 'user_connection.php';
	$first_name='';
	$last_name='';
	$email='';
	$password='';
	$city='';
	$street_name='';
	$mobile='';
	$guardian='';
	require "user_connection.php";
	$sql="SELECT * FROM user where email=:email";
	$statement=$pdo->prepare($sql);
	$email=$_POST['email'];
	$statement->bindParam(":email",$email,PDO::PARAM_STR);
	$statement->execute();

	$data=$statement->fetchAll();
	foreach($data as $row){
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$email=$row['email'];
	$password=$row['password'];
	$city=$row['city'];
	$street_name=$row['street_name'];
	$mobile=$row['mobile'];
	$guardian=$row['guardian'];

	echo $row['first_name'] .' '. $row['last_name'] .' '. $row['email'] .' '. $row['password'] .' '. $row['city'] .' '. $row['street_name'] .' '. $row['mobile'] .' '. $row['guardian'];
	}

	if(isset($_POST['update'])){

	$sql = "UPDATE user SET first_name=:first_name,last_name=:last_name,email=:email, password=:password, city=:city, street_name=:street_name,mobile=:mobile, guardian=:guardian";

	$statement = $pdo->prepare($sql);
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
}
$sql="SELECT * FROM user where email=:email";
$statement=$pdo->prepare($sql);
$email=$_POST['email'];
$statement->bindParam(":email",$email, PDO::PARAM_STR);
$statement->execute();

$data=$statement->fetchAll();
foreach ($data as $row) {
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$email=$row['email'];
	$password=$row['password'];
	$city=$row['city'];
	$street_name=$row['street_name'];
	$mobile=$row['mobile'];
	$guardian=$row['guardian'];
}
$pdo=null;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasjil | My account page</title>
	<meta name="description" content="You can enroll your children in school without go to schools just do this online">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="keywords" content="Registration, online registration, schools, schools registration">
	<meta name="author" content="Mays Alkhandakji">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
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
	<header>
		<a href="Home.php"><img src="img/logo.png" alt="Website logo" id="logo"></a>
		<input type="search" id="site-search" name="search" placeholder="Search...">
		<button>Search</button>
		<div>
		<a href="index.php" id="linktext">Log out</a>
		<a href="Myaccount.php"><img src="img/profile.png" id="icon1"></a>
	</div>
	</header>

	<main>
		<nav>
		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="Schools.php">Schools</a></li>
			<li><a href="Most popular.php">Most popular</a></li>
			<li><a href="OurWebsite.php">Our website</a></li>
			<li><a href="Myaccount.php">My account</a></li>
		</ul>
	    </nav>
		<center><h1>Profile Information</h1></center><br><br>
	<form method="post" id="update">
		<div>
		<div><label for="fname"> First Name:  </label>&ensp;&ensp;<input type="text" id="fname" name="first_name" value="<?php echo $first_name?>"></div><br>

		<div><label for="lname"> Last Name:  </label>&ensp;&ensp;<input type="text" id="lname" name="last_name" value="<?php echo $last_name ?>"></div><br>

		<div><label for='email'>Email:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type='email' id='email' name='email' value="<?php echo $email ?>"></div><br>

		<div><label for='pass'>Password:  </label>&ensp;&ensp;&ensp;<input type='password' id='pass' name='password' <?php echo $password ?>></div><br>

		<div><label>City:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
		<select name="city">
			<option value="<?php echo $city ?>">Choose city</option>
			<option value="Amman">Amman</option>
			<option value="Irbid">Irbid</option>
			<option value="Zarqa">Zarqa</option>
			<option value="Jerash">Jerash</option>
			<option value="Aqaba">Aqapa</option>
			<option value="Ajloun">Ajloun</option>
			<option value="Salt">Salt</option>
			<option value="Kerak">Kerak</option>
			<option value="Madaba">Madaba</option>
			<option value="Tafilah">Tafilah</option>
			<option value="Ma'an">Ma'an</option>
			<option value="Ramtha">Ramtha</option>
		</select>

		&ensp;&ensp;<label for='street'>Street name:  </label>&ensp;&ensp;<input type='text' id='street' name='street_name' value="<?php echo $street_name ?>"></div><br>

		<div><label for="num"> Mobile:  </label>&ensp;&ensp;&ensp;&ensp;&ensp;<input type="text" id="num" name="mobile" value="<?php echo $mobile ?>"></div><br>

		<div id="G"><label>Guardian:</label>&ensp;&ensp;
			<input type='radio' id='mother' name='guardian' value='<?php echo $guardian ?>'><label for='mother'>Mother</label>
			<input type='radio' id='father' name='guardian' value='<?php echo $guardian ?>'><label for='father'>Father</label></div><br><br>

		<center><div><button type='submit' name="update">Update</button></div></center><br><br>
	</div>
	</form>


	</main>

	<footer id="footer">
        	<div id='grids_footer'>

			<div id ='About_us'>
			<center>
				<h2 id="AU">About us</h2>
        		<p>We provide a website that provides a service to search for schools and transfer children from one school to another to save parents time and effort.</p>
        	</center>
			</div>

			<div id ='Contact'>
			<center>
			   <h2 id="Con">Contact us</h2>
			   <p>You can contact with us by phone number<br><br>0775032033<br><br>06-5626090</p>
			</center>
            </div>

			<div id ='Follow_us'>
			<center>
				<h2>Follow us</h2>
				<a href="https://www.facebook.com/mays.mutasem"><img src="img/f.png"></a>
				<a href="maysmfk2001@gmail.com"><img src="img/g.png"></a>
				<a href="https://www.instagram.com/maysmoutasem/?igshid=YmMyMTA2M2Y="><img src="img/i.png"></a>
			</center>
			</div>

			<div id ='End'>
            <center><p> copyright &copy; Tasjil | Mays Alkhandakji </p></center>
            </div>
        </div>
        </footer>
</body>
</html>