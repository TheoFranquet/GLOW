<?php
$connection = mysql_connect('ee-ubuntu-1.ee.ic.ac.uk', 'phpmyadmin', 'imperialcollege');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('phpmyadmin');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>