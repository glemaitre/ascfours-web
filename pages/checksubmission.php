<?php
ob_start();
$host="sql.free.fr"; // Host name 
$username="ascfours"; // Mysql username 
$password="look481s"; // Mysql password 
$db_name="ascfours"; // Database name 
$tbl_name="result"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

//Obtain date, position and place
$login = $_POST['racer'];
$date = $_POST['date'];
$position = $_POST['position'];
$place = $_POST['place'];

// To protect MySQL injection (more detail about MySQL injection)
$login = stripslashes($login);
$login = mysql_real_escape_string($login);
$date = stripslashes($date);
$date = mysql_real_escape_string($date);
$position = stripslashes($position);
$position = mysql_real_escape_string($position);
$place = stripslashes($place);
$place = mysql_real_escape_string($place);

// Commit the values to the database
$idracer = searchIDRacer($login);
$sql="INSERT INTO `$db_name`.`$tbl_name` (`IDResult`, `IDRacer`, `Date`, `Place`, `Position`) VALUES (NULL, '$idracer', '$date', '$place', '$position');";
$result=mysql_query($sql);

if ($result) {
	// Reload the page
	header("location:editresult.php");
}
else {
	// Problem during the insert
	die('Invalid query: ' . mysql_error());
}

function searchIDRacer($Login) {

$host="sql.free.fr"; // Host name 
$username="ascfours"; // Mysql username 
$password="look481s"; // Mysql password 
$db_name="ascfours"; // Database name 
$tbl_name="racers"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE Login='$Login'";

$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$id = $row['IDRacer'];

return $id;
}
ob_end_flush();
?>