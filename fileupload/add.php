<?php

$fileName = $_FILES["file1"]["name"];
$fileTmpLoc = $_FILES["file1"]["tmp_name"];
move_uploaded_file( $fileTmpLoc,"upload/$fileName");





 //This is the directory where images will be saved
 $target = "images/";
 $target = $target . basename( $_FILES['photo']['name']);

 //This gets all the other information from the form
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $pic=($_FILES['photo']['name']);

 // Connects to your Database
 mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error()) ;
 mysql_select_db("Database_Name") or die(mysql_error()) ;

 //Writes the information to the database
 mysql_query("INSERT INTO `employees` VALUES ('$name', '$email', '$phone', '$pic')") ;

 //Writes the photo to the server
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 {

     //Tells you if its all ok
     echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has b

een added to the directory";
 }
 else {

     //Gives and error if its not
     echo "Sorry, there was a problem uploading your file.";
 }
 ?>