<?php
if(isset($_POST['submit'])){
	move_uploaded_file($_FILES['files']['tmp_name'],"uploaded/".$_FILES['files']['name']);
	echo "<center><h1 style='color:#3F7C88'></center>File is uploaded successfully</h1>";
}
print_r($_FILES['files']);
?>