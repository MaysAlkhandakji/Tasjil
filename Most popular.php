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
	<title>Tasjil | Most popular page</title>
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

		<div class="tab1">
        <table border="1" cellspacing="0">
        <h3>Amman</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> Sakina Bint Al Hussein Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>
        </tr>
        <tr>
            <td> Sahab Secondary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>
        </tr>
            <td> Radwan School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>
        </tr>
        <tr>
            <td> Princess Rahma Bint El Hassan, the primary school for girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>
        </tr>
        <tr>
            <td> Arjan Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td> Al-Israa Elementary Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>
        </tr>
        <tr>
            <td> Aisha Um of Al-Mo'mneen, the Basic for girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab1">
        <table border="1" cellspacing="0">
        <h3>Irbid</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> Hassan Kamel Al-Sabah Comprehensive Secondary School for Boys</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td> Basic Mamoun for boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td> Bilal Bin Rabah Elementary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td> Irbid Comprehensive Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td> Al-Mughayr Comprehensive Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab2">
        <table border="1" cellspacing="0">
        <h3>Ajloun</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> Green mountain school</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td> Ajloun Baptist School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td> Ajloun Pioneering Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Ain Al-Bustan Elementary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>King Abdullah II School for Excellence, Ajloun</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab2">
        <table border="1" cellspacing="0">
        <h3>Jerash</h3>    
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Al Khansa Secondary School for Girls</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Jerash Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Othman bin Affan Primary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Zaid bin Al-Harith School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Hassan Al Kayed Vocational School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab3">
        <table border="1" cellspacing="0">
        <h3>Zarqa</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Zarqa Secondary Comprehensive School for Girls</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Zarqa Secondary Comprehensive School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Somaya Elementary School, Zarqa</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Thabit Elementary School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab3">
        <table border="1" cellspacing="0">
        <h3>Aqapa</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Zaid bin Harith Elementary School for Boys</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Eighth Elementary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Princess Basma Elementary Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Tenth Secondary Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Queen Zain Al Sharaf Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab4">
        <table border="1" cellspacing="0">
        <h3>Salt</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> Salt Comprehensive School for Girls</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td> Al-Balqa Secondary Comprehensive School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Wadi Al-Salt Elementary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Abu Talib Model School and Kindergarten AMS</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Abdel Hafez AlAzab School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab4">
        <table border="1" cellspacing="0">
        <h3>Kerak</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>AlMarj Elementary Mixed School</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Al Mansheya Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>School Mutah Secondary Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Karak Secondary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab5">
        <table border="1" cellspacing="0">
        <h3>Madaba</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Madaba Secondary School for Boys</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Madaba Elementary Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Madaba First Secondary School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Khadija Bint Khuwailid School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Qadisiyah Secondary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab5">
        <table border="1" cellspacing="0">
        <h3>Tafilah</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Anas Bin Malik Elementary School for Boys</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>King Abdullah II School of Excellence</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Balat Al Shuhada Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Fatima Bint Al-Yaman Secondary Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab6">
        <table border="1" cellspacing="0">
        <h3>Ma'an</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Khadija girl Khuwaylid Basic School for Girls</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Ma'an Secondary Comprehensive School for Girls</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Abdul Rahman bin Auf Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>School Ali bin Abi Talib Elementary Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Osama bin Zaid School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table>
        </div>

        <div class="tab6">
        <table border="1" cellspacing="0">
        <h3>Ramtha</h3>
        <thead>
        <tr> 
            <th> School name</th>
            <th> Upload/Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Maimouna Bint Al-Harith School for Girls</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Al-Zahraa Secondary School for Girls</td>
             <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td>  
        </tr>
        <tr>
            <td>Abi Tammam Secondary School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Ben Mekdad Black School for Boys</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        <tr>
            <td>Sakina Bint Al Hussein Elementary Mixed School</td>
            <td><center><a href="upload.php"><button>Upload</button></a>&ensp;&ensp;&ensp;&ensp;<button>Delete</button></center></td> 
        </tr>
        </tbody>
        </table><br><br>
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
             <p>You can contact with us by phone number<br><br>0775032033<br><br> 06-5626090</p></center>
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