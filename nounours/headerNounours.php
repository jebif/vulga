<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les aventures de Nounours | JeBiF </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/afa8ecb058.js" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="../media/stylesNounours.css" type="text/css">
		<link rel="icon" href="../ADN/EcoleADN/JeBiF.jpg">

		<meta charset="utf-8">
		<meta name="title" content="Les aventures de Nounours - JeBiF">
		<meta name="language" content="fr">
	</head>
<?php
if(isset($bodyclass)){
	echo "<body class='".$bodyclass."'>";
}else{
	echo "<body>";
}
?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<!--<nav class="navbar navbar-expand-lg navbar-default navbar-dark">

		<a class="navbar-brand" href="#">
			<img src="../media/JebifLogo.png" width="50" class="d-inline-block align-top">
		</a>
		<span class="navbar-brand">RSG France - JeBiF</span>
	</nav>-->

	<section id="content" class="container-fluid">

		<?php /*if(basename($_SERVER['REQUEST_URI']) != 'index.php'){ ?>
			<p><a class="btn btn-outline-primary float-right btn-lg" role="button" href= "index.php">Recommencer</a></p>
		<?php }*/ ?>
