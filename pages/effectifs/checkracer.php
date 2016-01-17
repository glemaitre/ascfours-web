<?php
$host="sql.free.fr"; // Host name 
$username="ascfours"; // Mysql username 
$password="look481s"; // Mysql password 
$db_name="ascfours"; // Database name 
$tbl_name="racers"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$racer=$_POST['racer'];

// To protect MySQL injection (more detail about MySQL injection)
$racer = stripslashes($racer);
$racer = mysql_real_escape_string($racer);

session_register("racer");
header("location:racer.php");
?>