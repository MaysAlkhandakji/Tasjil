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
	<title>Tasjil | Home page</title>
	<meta name="description" content="You can enroll your children in school without go to schools just do this online">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="keywords" content="Registration, online registration, schools, schools registration">
	<meta name="author" content="Mays Alkhandakji">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<style>
		p{
			font-size: 25px;
		}
	</style>
	<header>
		<a href="Home.php"><img src="img/logo.PNG" alt="Website logo" id="logo"></a>
		<input type="search" id="site-search" name="search" placeholder="Search...">
		<button>Search</button>
	<div>
		<a href="logout.php" id="linktext">Log out</a>
		<a href="Myaccount.php"><img src="img/profile.png" id="icon1"></a>
	</div>
	</header>
	
	<main>
		<nav>
		<ul>
			<li><a href=Home.php>Home</a></li>
			<li><a href=Schools.php>Schools</a></li>
			<li><a href=Most popular.php>Most popular</a></li>
			<li><a href=OurWebsite.php>Our website</a></li>
			<li><a href=Myaccount.php>My account</a></li>
		</ul>
	    </nav>
		<img src="img/1.png" alt="School building" id="school">

		<h1>Welcome to our website</h1>

		<p>Welcome to our site (Tasjeel). We thank you for choosing our site to provide the service of registering students in schools, and we hope that our site will be easy for you and that you will like it.Tasjeel website is a website that provides two services.</p>
		<p>The first service is to display the government schools located in all governorates in the Hashemite Kingdom of Jordan in order, where each governorate will have a table showing the schools in it.</p>
		<p>The second service is the possibility of enrolling children in any public school that the parents want. This means that parents can transfer their children from one school to another electronically without having to go to school, which saves parents time and effort.</p>
		<p>On our site you will find numbers and ways to contact us in case you encounter any problem while using the site or if you wish to inquire about any matter related to our site. You can also navigate between the pages of our site and you will find a page that will help you learn how to use the site and how you can take your children through our site.</p>
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
			   <p>You can contact with us by phone number<br><br>0775032033<br><br> 06-5626090</p>
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