<?php
	$dir = $_POST['action'];
	$output = shell_exec('./sendCommand.sh '.$dir);
        echo $output;
?>
