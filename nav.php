<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php' ?>
	
	<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$('.arrow').click(function() {
			var dir=$(this).val();
			$.ajax({
				url: 'ajax.php',
				data: {'action': dir},
				type: 'post',
				success: function(output) {
					alert(output);
				}
			})
		});
	});

	</script>

<body onload="init()">
	<div class="header" style="display: block;"><img src="img/SqrFrt.png" style="height: 60px; width: auto;"></img></div>
	<div class="container">
	<div class="pane slideRight2" id="slidersleft">
		<!--squarefruit colors - blue: #00B0F0; red: #E02C2C; -->
		<div class="sidehead">Navigate</div>
		<div class="navpad">
		<ul>
			<li><input type="image" value="for" class="arrow uparr" src="img/whtarr.png" />   </li>
			<li><input type="image" value="lft" class="arrow lftarr" src="img/whtarr.png" /><input type="image" value="stp" class="arrow" style="height: 50px; width: 50px; padding: 0 5px 0 5px"  src="img/stop.png" /><input type="image" value="rgt" class="arrow right" src="img/whtarr.png" /></li>
			<li><input type="image" value="bak" class="arrow downarr" src="img/whtarr.png" /> </li>
		</ul>
		</div>
	</div>
	</div>
	<div class="can tabContent">
		<img src="http://personaV0.local:8081/?action=stream" width="600" height="400" />
	</div>
	<?php include 'buttons.php' ?>
</body>

</html>
