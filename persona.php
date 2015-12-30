<!DOCTYPE html>
<html lang="en">

	<?php include 'head.php' ?>
<body onload="init()">
	<div class="header" style="display: block;"><img src="img/SqrFrt.png" style="height: 60px; width: auto;"></img></div>
	<div class="container">
	<div class="pane slideRight2" id="slidersleft">
		<input id="closeleft" type="button" onclick='toggle_visibility("slidersleft")'/>
		<!--squarefruit colors - blue: #00B0F0; red: #E02C2C; -->
		<div class="sidehead">Motors</div>
		<input class="slider" id="sl1" type="range" min="0" max="180" onchange="changeColor(this.value)" />
		<p class="note">Current value: <span id="currentValue">180</span></p>
		<input class="slider" id="sl2" type="range" min="0" max="180" onchange="changeColor(this.value)" />
		<p class="note">Current value: <span id="currentValue">180</span></p>
		<input class="slider" id="sl3" type="range" min="0" max="180" onchange="changeColor(this.value)" />
		<p class="note">Current value: <span id="currentValue">180</span></p>
		<input class="slider" id="sl4" type="range" min="0" max="180" onchange="changeColor(this.value)" />
		<p class="note">Current value: <span id="currentValue">180</span></p>
		<input class="slider" id="sl5" type="range" min="0" max="180" onchange="changeColor(this.value)" />
		<p class="note">Current value: <span id="currentValue">180</span></p>
	</div>
	<div id="xyz" class="pane slideRight2">
		<div class="sidehead">Control using Axes</div>
		<input id="slix" class="slider" type="range" min="0" max="200" />
		<p class="note">X: <span id="currentValue">200</span></p>
		<input id="sliy" class="slider" type="range" min="0" max="200" />
		<p class="note">Y: <span id="currentValue">200</span></p>
		<input id="sliz" class="slider" type="range" min="0" max="200" />
		<p class="note">Z: <span id="currentValue">200</span></p>
	</div></div>
	<div class="can tabContent">
		<canvas id="sketch" class="slideDown2"  data-processing-sources="vimper/vimper.pde"></canvas>
	</div>
	<?php include 'buttons.php' ?>
</body>

</html>
