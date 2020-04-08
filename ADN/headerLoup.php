<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Loup y es-tu? | JeBiF </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="./EcoleADN/stylesADN.css" type="text/css">
		<link rel="icon" href="./EcoleADN/Menu.jpg">

		<meta charset="utf-8">
		<meta name="title" content="Ecole de l'ADN - JeBiF">
		<meta name="language" content="fr">
		<meta name="robots" content="All">
		<meta name="author" content="Virginie Bernard">
		<meta name="owner" content="v.bernard.bioinfo@gmail.com">
		<meta name="revisit-after" content="30 DAYS">

	</head>
<body>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<nav class="navbar navbar-expand-lg navbar-default navbar-dark">

		<a class="navbar-brand" href="#">
			<img src="JebifLogo.png" width="50" class="d-inline-block align-top">
		</a>
		<span class="navbar-brand">RSG France - JeBiF</span>
	</nav>

	<section id="content" class="container-fluid">
		<h1 class="titreApp">Génétique et Bioinformatique</h1>
		<?php if(basename($_SERVER['REQUEST_URI']) != 'index.php'){ ?>
			<p><a class="btn btn-outline-primary float-right btn-lg" role="button" href= "index.php">Recommencer</a></p>
		<?php } ?>
