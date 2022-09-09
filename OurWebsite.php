<?php
session_start();
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasjil | Our website page</title>
	<meta name="description" content="You can enroll your children in school without go to schools just do this online">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="keywords" content="Registration, online registration, schools, schools registration">
	<meta name="author" content="Mays Alkhandakji">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
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

		<h1>About us</h1>

		<p>Because parents are busy with their work and circumstances that often do not allow them time to look for schools for their children, enter the course of searching for a school and move from one school to another, we thought of finding a solution to the problem.</p>

		<p>The solution was to build a website that provides the service of searching for schools and transferring children from one school to another, where parents will be able to know the government schools in the governorate in which they live, and then upload their son’s file or delete it from a school, thus the student has been registered at school or transfer it electronically and quickly.</p>

		<p>If you want to inquire about something related to the web or to report a problem you encountered while using the site, you can contact us by calling the phone number 5626090 / 0775032033, or by sending an email to this email maysmfk@gmail.com, and we will respond within 24 hours.</p>

		<h1>User guide</h1>
		<div id="UG">
		<div id="container1">
		<img src="img/Login.png" id="login" style="float: left; width: 450px; height: 350px; margin-right:2em"><br><br><br>
		<p>If you already have an account, enter your email and password then clicking the login button. If you do not have an account, you must first click on sign up button, then fill in the required information before clicking save button.<br><br>After that, you will go back to the login page and enter the email and password you created while filling out your information.<br><br>If the email and password you entered are correct (matches) with the ones you entered when you filled in your data when you created an account on the site, then you will be able to enter the site and through it you will be able to view the schools and the service will be provided to you.</p></div><br><br>

		<div id="container2">
		<br><img src="img/UD.png" id="ud" style="float: right; width:440px; height: 240px; margin-left: 1em;"><br><br>
		<p>When you enter the site, you will see the main page, from which you will be taken to the page you want by choosing the name of the page from the bar at the top of the main page. And when you choose the schools page, you will see the names of the schools, and next to each name there are two buttons, delete and upload.<br><br>If you want to register your son in a specific school, you have to click on the upload button and choose the file of your son/daughter on your device, so he/she will have been registered in the school, but if you want to withdraw your son/daughter’s file from the school, you have to click on the Delete button Next to the name of the school your son/daughter is in, he/she will have been withdrawn from the school.</p>
		</div>

		<div id="container3">
		<br><br><img src="img/Update.png" id="upd" style="float: left; width:400px; height: 400px; margin-right: 2em;"><br><br><br><br>
		<p>This image shows the profile page in which it displays your information that you filled out before when you created your account on the site, and you can also modify any information you want to change, whether mobile number, city, email, etc.<br><br><br>You can change your data by clicking on the box that contains the information you want to change and then typing it again. When you have finished modifying the data you want, click on the Update button, and so your data will have been updated and the new data you entered has been approved, if you By changing the email or password, you must when entering the site enter the new email and password.</p>
		</div>
		</div>
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