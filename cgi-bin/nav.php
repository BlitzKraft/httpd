<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="icon" href="img/icon.png" type="image/png"/>
	<title>Persona v0.1b</title>
	<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
	
	<script language="javascript" type="text/javascript" src="js/processing.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/funcs.js"></script>
</head>
<body onload="init()">
	<div class="header" style="display: block;"><img src="img/SqrFrt.png" style="height: 60px; width: auto;"></img></div>
	<div class="container">
	<div class="pane chamfer slideRight2" id="slidersleft">
		<!--squarefruit colors - blue: #00B0F0; red: #E02C2C; -->
			<div class="sidehead">Navigate</div>
			<form action="script.php" method="get"><input type="submit" value="something"></input></form>
	</div>
	</div>
	<div class="can tabContent">
		<img src="http://192.168.0.35:8081/?action=stream" width="600" height="400" />
	</div>
	<?php include 'buttons.php' ?>
</body>

</html>
