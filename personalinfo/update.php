<?php
//print_r($_POST);

$id = $_POST['id'];
$code = $_POST['code'];
$track = $_POST['track'];
$fullname = $_POST['fullname'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$religion = $_POST['religion'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$nationalid = $_POST['nationalid'];
$useremail = $_POST['useremail'];
$mobile = $_POST['mobile'];
$hometown = $_POST['hometown'];
$currentcity = $_POST['currentcity'];
$sscroll = $_POST['sscroll'];
$sscboard = $_POST['sscboard'];
$sscyear = $_POST['sscyear'];
$sscgroup = $_POST['sscgroup'];
$sscresult = $_POST['sscresult'];
$hscroll = $_POST['hscroll'];
$hscboard = $_POST['hscboard'];
$hscyear = $_POST['hscyear'];
$hscgroup = $_POST['hscgroup'];
$hscresult = $_POST['hscresult'];
$honssubject = $_POST['honssubject'];
$honsresult = $_POST['honsresult'];
$bangla = $_POST['bangla'];
$english = $_POST['english'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");



$query = "UPDATE `crud01`.`personalinfo` SET `code` = '".$code."',
                                             `track` = '".$track."',
                                             `fullname` = '".$fullname."',
                                             `fathername` = '".$fathername."',
                                             `mothername` = '".$mothername."',
                                             `religion` = '".$religion."',
                                             `dob` = '".$dob."',
                                             `gender` = '".$gender."',
                                             `nationality` = '".$nationality."',
                                             `nationalid` = '".$nationalid."',
                                             `useremail` = '".$useremail."',
                                             `mobile` = '".$mobile."',
                                             `hometown` = '".$hometown."',
                                             `currentcity` = '".$currentcity."',
                                             `sscroll` = '".$sscroll."',
                                             `sscboard` = '".$sscboard."',
                                             `sscyear` = '".$sscyear."',
                                             `sscgroup` = '".$sscgroup."',
                                             `sscresult` = '".$sscresult."',
                                             `hscroll` = '".$hscroll."',
                                             `hscboard` = '".$hscboard."',
                                             `hscyear` = '".$hscyear."',
                                             `hscgroup` = '".$hscgroup."',
                                             `hscresult` = '".$hscresult."',
                                             `honssubject` = '".$honssubject."',
                                             `honsresult` = '".$honsresult."',
                                             `bangla` = '".$bangla."',
                                             `english` = '".$english."'

            WHERE `personalinfo`.`id` = $id;";


mysqli_query($link, $query);

header('location:list.php');
?>
