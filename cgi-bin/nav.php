<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php' ?>
<body onload="init()">
	<div class="header" style="display: block;"><img src="img/SqrFrt.png" style="height: 60px; width: auto;"></img></div>
	<div class="container">
	<div class="pane chamfer slideRight2" id="slidersleft">
		<!--squarefruit colors - blue: #00B0F0; red: #E02C2C; -->
		<div class="sidehead">Navigate</div>
		<div class="navpad">
			<img class="arrow up" src="img/whtarr.png" />
			<img class="arrow lft" src="img/whtarr.png" />
			<img class="arrow right" src="img/whtarr.png" />
			<img class="arrow down" src="img/whtarr.png" />
			<form action="script.php" method="get"><input type="submit" value="something" /></form>
		</div>
	</div>
	</div>
	<div class="can tabContent">
		<img src="http://192.168.0.35:8081/?action=stream" width="600" height="400" />
	</div>
	<?php include 'buttons.php' ?>
</body>

</html>