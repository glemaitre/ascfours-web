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
         <h1 style="margin:0"><img src="../../images/logo_ascfours2.png" width="162" height="100" style="float:right"/></h1>
	<div id="topinside">		
	<div id="topmenu">
	
	</div>
	</div>	
	</div>
		
<div id="container">	

	<div id="main">
		<div style="padding-right:10px">
			<div class="componentheading">
				Effectifs 4<sup>eme</sup> categorie
				<span class="article_separator">&nbsp;</span>
			</div>
			
			<br>
			
			<table class="blog" cellpadding="0" cellspacing="0">
			<tr>
				<td valign="top">
				<div>
				
				<?php
				include('../functions.php');
				$categorie = 4;
				searchcategorie($categorie);
				?>
					
					
					
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
							<ul class="menu"><li id="current" class="active item1"><a href="cat1.php"><span>1<sup>ere</sup> Categorie</span></a></li></ul>	
							<ul class="menu"><li id="current" class="active item1"><a href="cat2.php"><span>2<sup>eme</sup> Categorie</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="cat3.php"><span>3<sup>eme</sup> Categorie</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="cat4.php"><span>4<sup>eme</sup> Categorie</span></a></li></ul>
							<ul class="menu"><li id="current" class="active item1"><a href="catjeunes.php"><span>Categorie Jeunes</span></a></li></ul>
						</div>
					<ul class="menu"><li id="current" class="active item1"><a href="../sponsoring.php"><span>Sponsoring</span></a></li></ul>
					<ul class="menu"><li id="current" class="active item1"><a href="../contact.php"><span>Contact</span></a></li></ul>
			</div>
	</div>	


<div style="clear:both"></div>
</div>

<div id="footer">
Webmaster <a href="http://g.lemaitre58.free.fr">Guillaume Lemaitre</a> - <a href="../login.php">Espace privee</a>
</div>
</body>
</html>
