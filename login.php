<?php
session_start();


$host="ee-ubuntu-1.ee.ic.ac.uk"; // Host name 
$username="project"; // Mysql username 
$password="imperialcollege"; // Mysql password 
$db_name="phpmyadmin"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect($host, $username, $password)or die("cannot connect" .mysql_error()); 
mysql_select_db($db_name)or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM " .$tbl_name. " WHERE username='" . $myusername . "' and password='" .$mypassword. "'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['my_username'] = $myusername;
$_SESSION['status'] = 2;

$sql=mysql_query("SELECT name FROM " .$tbl_name. " WHERE username='" .$myusername. "'");
if(is_resource($sql) and mysql_num_rows($sql)>0){
    $myname = mysql_fetch_array($sql);
}


$_SESSION['my_name'] = $myname["name"];
header("Location: login_success.php");
}
else {
header("Location: main.html");
}
?>