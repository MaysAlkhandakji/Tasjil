<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasjil | Upload page</title>
	<meta name="description" content="You can enroll your children in school without go to schools just do this online">
	<link rel="icon" type="image/png" href="img/logo.png">
	<meta name="keywords" content="Registration, online registration, schools, schools registration">
	<meta name="author" content="Mays Alkhandakji">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
		form{
			background-color:#3F7C88;
			width: 300px;
			height: 300px;
			margin-top: 200px;
		}
		#button{
			background-color:#A5DBDC;
			width: 150px;
			border-color:#A5DBDC;
			border-radius:20px 20px;
		}
		form input{
			margin-top: 100px;
			font-family: serif;
		}
	</style>
	<center>
	<form action="handelingUpload.php" method="post" enctype="multipart/form-data">
	<div>
	<input type="file" name="files">
	<input type="submit" name="submit" value="Upload" id="button">	
	</div>	
	</form>
	</center>
</body>
</html>