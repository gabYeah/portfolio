<?php 
	session_start();
	include('template.inc.php'); 
	include('init.php');
	include_once("analyticstracking.php");
	if(!isset($_GET['page']))
		{
			$page ='home';
		}
	else
		{
			$page = $_GET['page'];
		}
?>

<!DOCTYPE html>
<html>
<head>
<?php 
	includeHead('Gabriel Vergnaud | Portfolio | '.$page); 
	if($page == 'apropos')
		{
			echo '<link rel="stylesheet" href="css/apropos.css">';
		}
	if($page == 'home')
		{
			echo '<link rel="stylesheet" href="css/home.css">';
		}
?>
</head>
<body>

<?php

if($page == 'home')
	{
		includeBG(); 
	}
 showBodyHeader($donnees,$lang,$page); 
if($page == 'home')
	{
		includeHome(); 
	}
if($page == 'works')
	{
		includePortfolio($donnees);
	}
if($page == 'apropos')
	{
		includeApropos($donnees);
	}
if($page == 'contact')
	{
		includeContact($donnees,$lang);
	}
 ?>

<!-- // footer -->
<?php showBodyFooter($donnees,$page); ?>
<div id="bg"></div>
</body>
	
<?php includeJs();?>

</html>