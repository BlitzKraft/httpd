<!-- 
Robosapien possible commands

Red Commands:
=============
81 (129) - Right Arm Up
84 (132) - Right Arm Down 
85 (133) - Right Arm In 
82 (130) - Right Arm Out 
83 (131) - Tilt Body Right  
89 (137) - Left Arm Up
8C (140) - Left Arm down 
8D (141) - Left Arm In 
8A (138) - Left Arm Out 
8B (139) - Tilt Body Left 
80 (128) - Turn Right
88 (136) - Turn Left
86 (134) - Walk Forward 
87 (135) - Walk Backward 
8E (142) - Stop 

92 (146) - Right Sensor Program
94 (148) - Sonic Sensor Program
93 (147) - Left Sensor Program
90 (144) - Master Command Program
91 (145) - Program Play
 
Green Commands:
===============
A1 (161) - Right Hand Thump
A4 (164) - Right Hand Pickup
A5 (165) - Lean Backward
A2 (162) - Right Hand Throw 
A3 (163) - Sleep 
A9 (169) - Left Hand Thump
AC (172) - Left Hand Pickup
AD (173) - Lean Forward
AA (170) - Left Hand Throw 
AB (171) - Listen
A0 (160) - Right Turn Step
A8 (168) - Left Turn Step
A6 (166) - Forward Step 
A7 (167) - Backward Step 
AE (174) - RESET
B2 (178) - Right Sensor Program Execute
B4 (180) - Sonic Sensor Program Execute
B3 (179) - Left Sensor Program Execute
B0 (176) - Master Command Program Execute
B1 (177) - Wake Up
 
Orange Commands:
================
C1 (193) - Right Hand Sweep
C4 (196) - High 5
C5 (197) - Right Hand Strike 1
C2 (194) - Burp
C3 (195) - Right Hand Strike 2 
C9 (201) - Left Hand Sweep
CC (204) - Talk Back
CD (205) - Left Hand Strike 1
CA (202) - Whistle
CB (203) - Left Hand Strike 2
C0 (192) - Right Hand Strike 3
C8 (200) - Left Hand Strike 3
C6 (198) - Bulldozer
C7 (199) - Opps!
CE (206) - Roar
D2 (210) - Demo 1
D4 (212) - Dance
D3 (211) - Demo 2
D0 (208) - All Demo
D1 (209) - Power Off
*/
-->

<!DOCTYPE html>
<html>
	<?php include 'head.php' ?>
<head>
</head>
<body>
	<div class="can tabContent">
	<h2>RoboSapien Web Remote</h2>
	<h3>Action List 1</h3>
	<button id="129" onclick="buttonClick(this.id)" class="button touchbutton">Right Arm Up</button>
	<button id="132" onclick="buttonClick(this.id)" class="button touchbutton">Right Arm Down </button>
	<button id="133" onclick="buttonClick(this.id)" class="button touchbutton">Right Arm In </button>
	<button id="130" onclick="buttonClick(this.id)" class="button touchbutton">Right Arm Out </button>
	<button id="131" onclick="buttonClick(this.id)" class="button touchbutton">Tilt Body Right</button>
	<button id="137" onclick="buttonClick(this.id)" class="button touchbutton">Left Arm Up</button>
	<button id="140" onclick="buttonClick(this.id)" class="button touchbutton">Left Arm down </button>
	<button id="141" onclick="buttonClick(this.id)" class="button touchbutton">Left Arm In </button>
	<button id="138" onclick="buttonClick(this.id)" class="button touchbutton">Left Arm Out </button>
	<button id="139" onclick="buttonClick(this.id)" class="button touchbutton">Tilt Body Left </button>
	<button id="128" onclick="buttonClick(this.id)" class="button touchbutton">Turn Right</button>
	<button id="136" onclick="buttonClick(this.id)" class="button touchbutton">Turn Left</button>
	<button id="134" onclick="buttonClick(this.id)" class="button touchbutton">Walk Forward </button>
	<button id="135" onclick="buttonClick(this.id)" class="button touchbutton">Walk Backward </button>
	<button id="142" onclick="buttonClick(this.id)" class="button touchbutton">Stop </button>
	

	<h3>Action List 2</h3>

	<button id="161" onclick="buttonClick(this.id)" class="button touchbutton">Rt Hand Thump</button>
	<button id="164" onclick="buttonClick(this.id)" class="button touchbutton">Rt Hand Pickup</button>
	<button id="165" onclick="buttonClick(this.id)" class="button touchbutton">Lean Backward</button>
	<button id="162" onclick="buttonClick(this.id)" class="button touchbutton">Rt Hand Throw </button>
	<button id="163" onclick="buttonClick(this.id)" class="button touchbutton">Sleep </button>
	<button id="169" onclick="buttonClick(this.id)" class="button touchbutton">Left Hand Thump</button>
	<button id="172" onclick="buttonClick(this.id)" class="button touchbutton">Lt Hand Pickup</button>
	<button id="173" onclick="buttonClick(this.id)" class="button touchbutton">Lean Forward</button>
	<button id="170" onclick="buttonClick(this.id)" class="button touchbutton">Left Hand Throw</button>
	<button id="171" onclick="buttonClick(this.id)" class="button touchbutton">Listen</button>
	<button id="160" onclick="buttonClick(this.id)" class="button touchbutton">Right Turn Step</button>
	<button id="168" onclick="buttonClick(this.id)" class="button touchbutton">Left Turn Step</button>
	<button id="166" onclick="buttonClick(this.id)" class="button touchbutton">Forward Ste<p/button>
	<button id="167" onclick="buttonClick(this.id)" class="button touchbutton">Backward Step</button>
	<button id="177" onclick="buttonClick(this.id)" class="button touchbutton">Wake Up</button>

	<h3>Action List 3</h3>

	<button id="193" onclick="buttonClick(this.id)" class="button touchbutton">Right Hand Sweep</button>
	<button id="196" onclick="buttonClick(this.id)" class="button touchbutton">High 5</button>
	<button id="197" onclick="buttonClick(this.id)" class="button touchbutton">Rt Hand Strike 1</button>
	<button id="194" onclick="buttonClick(this.id)" class="button touchbutton">Burp</button>
	<button id="195" onclick="buttonClick(this.id)" class="button touchbutton">Rt Hand Strike 2 </button>
	<button id="201" onclick="buttonClick(this.id)" class="button touchbutton">Left Hand Sweep</button>
	<button id="204" onclick="buttonClick(this.id)" class="button touchbutton">Talk Back</button>
	<button id="205" onclick="buttonClick(this.id)" class="button touchbutton">Left Hand Strike 1</button>
	<button id="202" onclick="buttonClick(this.id)" class="button touchbutton">Whistle</button>
	<button id="203" onclick="buttonClick(this.id)" class="button touchbutton">Left Hand Strike 2</button>
	<button id="192" onclick="buttonClick(this.id)" class="button touchbutton">Rt Hand Strike 3</button>
	<button id="200" onclick="buttonClick(this.id)" class="button touchbutton">Left Hand Strike 3</button>
	<button id="198" onclick="buttonClick(this.id)" class="button touchbutton">Bulldozer</button>
	<button id="199" onclick="buttonClick(this.id)" class="button touchbutton">Oops!</button>
	<button id="206" onclick="buttonClick(this.id)" class="button touchbutton">Roar</button>
	<button id="210" onclick="buttonClick(this.id)" class="button touchbutton">Demo 1</button>
	<button id="212" onclick="buttonClick(this.id)" class="button touchbutton">Dance</button>
	<button id="211" onclick="buttonClick(this.id)" class="button touchbutton">Demo 2</button>
	<button id="208" onclick="buttonClick(this.id)" class="button touchbutton">All Demo</button>
	<button id="209" onclick="buttonClick(this.id)" class="button touchbutton">Power Off</button>
	<?php include 'buttons.php' ?>
	</div>
</body>
</html>
