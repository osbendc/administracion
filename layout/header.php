<?php //error_reporting(0);?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fichas</title>

    <!-- Bootstrap Core CSS -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="src/jqueryui/jquery-ui.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="src/js/jquery-3.1.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="src/js/bootstrap.min.js"></script>
	<script src="media/js/jquery.dataTables.min.js"></script>
	<script src="media/js/dataTables.bootstrap.js"></script>
	<script src="src/jqueryui/jquery-ui.js"></script>
	<!-- butttons datatable-->
	<link rel="stylesheet" href="extensions/Buttons/css/buttons.bootstrap.css">
	<script src="extensions/Buttons/js/dataTables.buttons.js"></script>
	<script src="extensions/Buttons/js/buttons.bootstrap.js"></script>
	<script src="extensions/Buttons/js/buttons.flash.js"></script>
	<script src="extensions/Buttons/js/buttons.html5.js"></script>
	<script src="extensions/Buttons/js/buttons.print.js"></script>
	<script src="extensions/Buttons/js/buttons.colVis.js"></script>
	<!-- /buttons-->
	<style>
		body {
		  padding-top: 70px;
		}
		.starter-template {
		  padding: 40px 15px;
		  text-align: center;
		}
		.dataTables_scrollHeadInner{
			width:100% !important;
		}
		.responsive{
			width:100% !important;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">FICHAS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li><a href="app.php">Inicio</a></li>
		    <li><a href="archivados.php">Archivados</a></li>
            <li><a href="nueva.php">Nueva</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
              <li><a href="login/cerrar.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div>