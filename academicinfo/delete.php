<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "DELETE FROM `crud01`.`academicinfo` WHERE `academicinfo`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>