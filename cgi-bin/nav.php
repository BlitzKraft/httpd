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
		<ul>
			<li><img class="arrow uparr" src="img/whtarr.png" />   </li>
			<li><img class="arrow lftarr" src="img/whtarr.png" /><img style="height: 50px; width: 50px; padding: 0 5px 0 5px"  src="img/stop.png" /><img class="arrow right" src="img/whtarr.png" /></li>
			<li><img class="arrow downarr" src="img/whtarr.png" /> </li>
			<li></li>
		</ul>
			<form action="script.php" method="get"><input type="submit" value="something" /></form>
		</div>
	</div>
	</div>
	<div class="can tabContent">
		<img src="http://192.168.0.163:8081/?action=stream" width="600" height="400" />
	</div>
	<?php include 'buttons.php' ?>
</body>

</html>
