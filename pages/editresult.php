<?php
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
putenv("TZ=UTC"); 
$today = date("Y-m-d");
$login = $_SESSION['myusername'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<link rel="stylesheet" href="../css/template.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/tables.css" /> 
<link href="../images/icone.ico" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="description" content=".:Site officiel de l'ASC Fours:."><title>.:Site officiel de l'ASC Fours:.</title>
</head>

<body>
<div style="overflow: hidden; position: absolute; top: 1px; left: 1px; height: 1px; width: 1px;">
</div>

	<div id="header">
	<div id="headerinside">	
	<h1 style="margin:0"><img src="../images/logo.png" width="410" height="100" style="float:left"/></h1>
         <h1 style="margin:0"><img src="../images/logo_ascfours2.png" width="162" height="100" style="float:right"/></h1>
	<div id="topinside">		
	<div id="topmenu">
	
	</div>
	</div>	
	</div>
		
<div id="container">

	<div id="main">
		<div style="padding-right:10px">
			<div class="componentheading">
				Saisie de resultats
				<span class="article_separator">&nbsp;</span>
			</div>
			
			<br>		
			<table class="contentpaneopen" cellpadding="0" cellspacing="0" align="center" width="100%">
			<!-- Palamares -->
					<tr>
						<td colspan="4" class="efftable" bgcolor="#01336e" valign="center" align="center" width="100%" height="40">
							PALMARES A INTRODUIRE
						</td>
					<tr> 
						<td class="helpHed" valign="center" align="center" width="30%">Date</td><td class="helpHed" valign="center" align="center" width="30%">Lieu</td><td td colspan="2" class="helpHed" valign="center" align="center" width="30%">Place</td>
						<!-- Field where the data will be entered -->
					</tr>
					<tr>
						<form name="dataacquisition" method="post" action="checksubmission.php">
						<input type="hidden" name="racer" value="<?php echo $login ?>">
						<td><input name="date" type="date" value="<?php echo $today;  ?>"> </td>
						<td><input name="place" type="text" id="place"></td>
						<td><input name="position" type="text" id="position"></td>
						<td><input type="submit" name="Submit" value="Submission"></td>
						</form>
					</tr>
			</table>
			<br
			<br>
			<div align="center" class="breadcrumbs">
			</div>
		</div>
	</div>
	
	<div id="leftsidebar">
		<div class="moduletable_menu">
		<h3>Menu principal</h3>
			<form name="form1" method="post" action="logout.php">
			<input type="submit" name="Submit" value="Deconnecter">
			</form>
		</div>
	</div>

<div style="clear:both"></div>
</div>

<div id="footer">
Webmaster <a href="http://g.lemaitre58.free.fr">Guillaume Lemaitre</a>.
</div>
</body>
</html>
