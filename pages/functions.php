<?php
function searchCategorie($categorie) {

$host="sql.free.fr"; // Host name 
$username="ascfours"; // Mysql username 
$password="look481s"; // Mysql password 
$db_name="ascfours"; // Database name 
$tbl_name="racers"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE Categorie='$categorie' ORDER BY Firstname";

$result = mysql_query($sql);
$count=mysql_num_rows($result);

if($count >= 1) {

	echo"<table class=\"contentpaneopen\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">";

	// In order to know the number of row which will have to be created expecting three instances by row
	$nbrow = ( floor ( $count / 3 ) ) + 1;
	$nbitemslastrow = $count % 3;
	if ( ( $nbitemslastrow == 0 ) && ( floor($count / 3) >= 1 ) ) {
		$nbrow = ( floor ( $count / 3 ) ) ;
		$nbitemslastrow = 3;
	}
	// Complete each row
	for ( $i = 0 ; $i < $nbrow ; $i++ ) {
		// Name row
		echo"<tr>";
		
		// Count the number of items done by rows
		$countItems = 0;
		
		// Before the last line
		if ( (($nbrow-1) > 0 ) && ($i < ($nbrow-1)) ) {
			
			// Fill the three columns
			for ( $j = 0 ; $j < 3 ; $j++) {
				$row = mysql_fetch_array($result);
				echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
				echo"<td class=\"efftable\" bgcolor=\"#01336e\" valign=\"top\" align=\"left\" width=\"auto\">";
				echo $row['Firstname'] . " " . $row['Surname'];
				echo"</td>";
				$countItems++;
			}
			echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
		}
		
		// Case of the last line
		else {
			// Fill only the number of column are necessary
			for ( $j = 0 ; $j < $nbitemslastrow ; $j++) {
				$row = mysql_fetch_array($result);
				echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
				echo"<td class=\"efftable\" bgcolor=\"#01336e\" valign=\"top\" align=\"left\" width=\"auto\">";
				echo $row['Firstname'] . " " . $row['Surname'];
				echo"</td>";
				$countItems++;
			}
			echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
		}
		
		echo"</tr>";
		
		// Photo row
		// Rewind the data to place the curser at the right position
		mysql_data_seek($result, mysql_pointer_position($result) - $countItems);
		
		echo"<tr>";
		
		if ( (($nbrow-1) > 0 ) && ($i < ($nbrow-1)) ) {
			
			// Fill the three columns
			for ( $j = 0 ; $j < 3 ; $j++) {
				$row = mysql_fetch_array($result);
					echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
						echo"<td class=\"efftable\" valign=\"top\" align=\"center\" width=\"auto\">";
							echo"&nbsp;&nbsp;&nbsp;<img src=\"../../images/effectifs/" . $row['FilenamePicture'] . "\" style=\"float:center\"/>&nbsp;&nbsp;&nbsp;";
							echo"<br>";
							echo"<br>";
							echo"<form method=\"post\" action=\"checkracer.php\">";
    							echo"<input type=\"hidden\" name=\"racer\" value=\"" . $row['Login'] . "\">";
    							echo"<input type=\"submit\" value=\"Voir le profil\">";
							echo"</form>";
						echo"</td>";
			}
			echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";	
		}
		
		// Case of the last line
		else {
			for ( $j = 0 ; $j < $nbitemslastrow ; $j++) {
				$row = mysql_fetch_array($result);
					echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
						echo"<td class=\"efftable\" valign=\"top\" align=\"center\" width=\"auto\">";
							echo"&nbsp;&nbsp;&nbsp;<img src=\"../../images/effectifs/" . $row['FilenamePicture'] . "\" style=\"float:center\"/>&nbsp;&nbsp;&nbsp;";
							echo"<br>";
							echo"<br>";
							echo"<form method=\"post\" action=\"checkracer.php\">";
    							echo"<input type=\"hidden\" name=\"racer\" value=\"" . $row['Login'] . "\">";
    							echo"<input type=\"submit\" value=\"Voir le profil\">";
							echo"</form>";
						echo"</td>";
			}
			echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
		}
		echo"</tr>";
		
		// Before the last line
		if ( (($nbrow-1) > 0 ) && ($i < ($nbrow-1)) ) {
			
			// Fill the three columns
			for ( $j = 0 ; $j < 3 ; $j++) {
				echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
				echo"<td class=\"efftable\" bgcolor=\"#01336e\" valign=\"top\" align=\"left\" width=\"auto\"></td>";
			}
			echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
		}
		
		// Case of the last line
		else {
			// Fill only the number of column are necessary
			for ( $j = 0 ; $j < $nbitemslastrow ; $j++) {
				echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
				echo"<td class=\"efftable\" bgcolor=\"#01336e\" valign=\"top\" align=\"left\" width=\"auto\"></td>";
			}
			echo"<td bgcolor=\"#01336e\" valign=\"top\" align=\"center\" width=\"1\"></td>";
		}
		
		echo"</tr>";
	}
	
	echo"</tr>";		
	
	echo"</table>";
}

mysql_close($con);

}

function mysql_pointer_position($result_set) { 
        $num_rows = mysql_num_rows($result_set); 
        $i = 0; 
        while($result = mysql_fetch_array($result_set)) { 
            $i++; 
        } 
        $pointer_position = $num_rows - $i; 

		//Return pointer to original position 
        if($pointer_position <= $num_rows - 1) { 
            mysql_data_seek($result_set, $pointer_position); 
        } 
        return $pointer_position; 
} 

function findRacer($login) {

$host="sql.free.fr"; // Host name 
$username="ascfours"; // Mysql username 
$password="look481s"; // Mysql password 
$db_name="ascfours"; // Database name 
$tbl_name="racers"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE Login='$login'";

$result = mysql_query($sql);
$count=mysql_num_rows($result);

if($count == 1) {
$row = mysql_fetch_array($result);
	echo"<tr>";
		echo"<td class=\"topedge\" bgcolor=\"#01336e\" valign=\"center\" align=\"center\" width=\"auto\" height=\"40\">";
			echo "Team ASC FOURS";
		echo"</td>";
			echo"<td colspan=\"2\" class=\"effname\" valign=\"center\" align=\"center\" width=\"400 px\">";
				echo $row['Firstname'] . " " . $row['Surname'];
			echo"</td>";
	echo"</tr>";
					
	echo"<tr>";
	echo"<td>";
	echo"<br>";
		echo"&nbsp;&nbsp;&nbsp;<img src=\"../../images/effectifs/" . $row['FilenamePicture'] . "\" />&nbsp;&nbsp;&nbsp;";
	echo"</td>";
						
	echo"<td valign=\"top\">";
		echo"<b><br><hr><br>Date de naissance :";
		echo"<br><br><hr>Age :";
		echo"<br><br><hr>Specificites :";
		echo"<br><br><hr></b>";
	echo"</td>";
						
	echo"<td valign=\"top\">";
		echo"<br><hr><br>" . date('d F Y', strtotime($row['Birthday']));
									$years = (date('Y') - date('Y', strtotime($row['Birthday'])));
									if(date('m') > 04)
									{
										$years = $years;
									}
									elseif((date('m') == date('m', strtotime($row['Birthday'])))&&(date('j') >= date('d', strtotime($row['Birthday']))))
									{
										$years = $years;
									}
									else
									{
										$years--;
									}
		echo"<br><br><hr>" . $years . " ans";
		echo"<br><br><hr>Puncheur - Grimpeur - Rouleur";
		echo"<br><br><hr>";
	echo"</td>";
	echo"</tr>";
	
	echo"<tr>";
	echo"<td colspan=\"3\" class=\"efftable\" bgcolor=\"#01336e\" valign=\"center\" align=\"center\" width=\"auto\" height=\"40\">";
		echo"PALMARES";
	echo"<tr><td class=\"helpHed\" bgcolor=\"#01336e\" valign=\"center\" align=\"center\">Date</td><td class=\"helpHed\" valign=\"center\" align=\"center\">Lieu</td><td class=\"helpHed\" valign=\"center\" align=\"center\">Place</td></tr>";
	
		// Obtain all the list of the results
		$raceResults = searchResult($row['IDRacer']);
		for ( $i = 0 ; $i < mysql_num_rows($raceResults) ; $i++) {
			// Obtain race by race
			$race = mysql_fetch_array($raceResults);
			echo"<tr><td class=\"resultracer\" valign=\"center\" align=\"center\">" . date('d F Y', strtotime($race['Date'])) . "</td><td valign=\"center\" align=\"center\">" . $race['Place'] . "</td><td valign=\"center\" align=\"center\">" . $race['Position'] . "</td></tr>";
			echo"<tr><td><hr width=\"100%\" size=\"1\"></td><td><hr width=\"100%\" size=\"1\"></td><td><hr width=\"100%\" size=\"1\"></td></tr>";
		}	
	
	echo"</td>";
	echo"</tr>";
}
}

function searchResult($IDRacer) {

$host="sql.free.fr"; // Host name 
$username="ascfours"; // Mysql username 
$password="look481s"; // Mysql password 
$db_name="ascfours"; // Database name 
$tbl_name="result"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE IDRacer='$IDRacer' ORDER BY Date DESC";

$result = mysql_query($sql);

return $result;
}


if(isset($_GET['get_person']))
{
	ob_start();
	header("location:../effectifs/editresult.php");
	ob_end_flush();
}
?>
