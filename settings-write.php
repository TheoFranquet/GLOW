<?php
session_start();


$servername = "ee-ubuntu-1.ee.ic.ac.uk";
$username = "project";
$password = "imperialcollege";
$dbname = "phpmyadmin";
$tbl_name = "settings1";

$myagegroup=$_POST['agegroup']; 
$mylastbill=$_POST['lastbill'];
$mysupplier=$_POST['tariff'];
$myheater=$_POST['heater'];
$myf_area=$_POST['f-area'];
$mywall_area=$_POST['wall-area'];
$mywall_width=$_POST['wall-width'];
$mywall_type=$_POST['wall-type'];
$mywin_area=$_POST['win-area'];
$mywin_type=$_POST['win-type'];
$myceiling=$_POST['ceiling'];
$myusername=$_POST['myusername'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE settings1 SET agegroup='$myagegroup' , lastbill='$mylastbill' , supplier='$mysupplier' , heater='$myheater' , farea='$myf_area' , wallwidth='$mywall_width' , wallarea='$mywall_area', walltype='$mywall_type' , winarea='$mywin_area' , wintype='$mywin_type' , ceiling='$myceiling'  WHERE username='" .$_SESSION['my_username']. "'";


if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = 1;
} else {
    $_SESSION['status'] = 0;
}

header("Location: settingspage1.php#bottomOfPage");

$conn->close();
?>