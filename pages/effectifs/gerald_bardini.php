<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<link rel="stylesheet" href="../../css/template.css" type="text/css" />
<link href="../../images/icone.ico" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="description" content=".:Site officiel de l'ASC Fours:."><title>.:Site officiel de l'ASC Fours:.</title>
</head>

<body>
<div style="overflow: hidden; position: absolute; top: 1px; left: 1px; height: 1px; width: 1px;">
</div>

	<div id="header">
	<div id="headerinside">	
	<h1 style="margin:0"><img src="../../images/logo.png" width="410" height="100" style="float:left"/></h1>
         <h1 style="margin:0"><img src="../../images/LogoASCFoursJPEG.jpg" width="162" height="100" style="float:right"/></h1>
	<div id="topinside">		
	<div id="topmenu">
	
	</div>
	</div>	
	</div>
		
<div id="container">	

	<div id="main">
		<div style="padding-right:10px">
			<div class="componentheading">
				Fiche d'identite
				<span class="article_separator">&nbsp;</span>
			</div>
			
			<br>
			
			<table class="blog" cellpadding="0" cellspacing="0">
			<tr>
				<td valign="top">
				<div>
					
					
					<table class="contentpaneopen" cellpadding="0" cellspacing="0" align="center" >

					<tr>
						<td class="efftable" bgcolor="#01336e" valign="center" align="center" width="auto" height="40">
							Team ASC FOURS
						</td>
						<td colspan="2" class="effname" valign="center" align="center" width=" 400 px">
							Gerald Bardini
						</td>
					</tr>
					
					<tr>
					<!-- Photo -->
						<td >
							<br>
							&nbsp;&nbsp;&nbsp;<img src="../../images/effectifs/gerald_bardini.jpg" />&nbsp;&nbsp;&nbsp;
						</td>
						
					<!-- Informations -->
						<td valign="top">
							<b><br><hr><br>Date de naissance :
							<br><br><hr>Age :
							<br><br><hr>Specificites :
							<br><br><hr></b>
						</td>
						<td valign="top">
							<br><hr><br>18 Novembre 1982
							<br><br><hr><?php $years = (date('Y') - 1982);
									if(date('m') > 11)
									{
										$years = $years;
									}
									elseif((date('m') == 11)&&(date('j') >= 18))
									{
										$years = $years;
									}
									else
									{
										$years--;
									}
									echo $years ?> ans
							<br><br><hr>VTT
							<br><br><hr>
						</td>
					</tr>
					
					<!-- Palamares -->
					<tr>
						<td colspan="3" class="efftable" bgcolor="#01336e" valign="center" align="center" width="auto" height="40">
							PALMARES
						</td>
					</tr>
					
					</table>
					<span class="article_separator">&nbsp;</span>
				</div>
				</td>
			</tr>


			</table>
			<div align="center" class="breadcrumbs">
			</div>
		</div>
	</div>
	
	<div id="leftsidebar">
			<div class="moduletable_menu">
					<h3>Menu principal</h3>
					<ul class="menu"><li id="current" class="active item1"><a href="../../index.php">Home</a></li></ul>
					<ul class="menu"><li id="current" class="active item1"><a href="../club.php"><span>Club</span></a></li></ul>
						<div class="submenu">
							<ul class="menu"><li id="current" class="active item1"><a href="effectifs.php"><span>Effectifs</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="cat1.php"><span>1<sup>ère</sup> Categorie</span></a></li></ul>	
							<ul class="menu"><li id="current" class="active item1"><a href="cat2.php"><span>2<sup>ème</sup> Categorie</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="cat3.php"><span>3<sup>ème</sup> Categorie</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="cat4.php"><span>4<sup>ème</sup> Categorie</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="catjeunes.php"><span>Categorie Jeunes</span></a></li></ul>
						</div>
					<ul class="menu"><li id="current" class="active item1"><a href="../sponsoring.php"><span>Sponsoring</span></a></li></ul>
					<ul class="menu"><li id="current" class="active item1"><a href="../contact.php"><span>Contact</span></a></li></ul>
			</div>
	</div>	


<div style="clear:both"></div>
</div>

<div id="footer">
Webmaster <a href="http://g.lemaitre58.free.fr">Guillaume Lemaître</a>.
</div>
</body>
</html>
