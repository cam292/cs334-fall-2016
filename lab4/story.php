<!DOCTYPE html>
<html>
<head>
<!--
Craig Mazzotta
cs334
lab 4
-->
<meta charset="utf-8">
<title>Craig Mazzotta Lab4 php</title>
<link rel="stylesheet" href="main.css" media="screen" title="no title">
</head>
<body>
<h1>Little Boy Who?</h1>

<?php

$anim1 = filter_input(INPUT_POST, "anim1");
$anim2 = filter_input(INPUT_POST, "anim2");
$anim3 = filter_input(INPUT_POST, "anim3");
$place1 = filter_input(INPUT_POST, "place1");
$place2 = filter_input(INPUT_POST, "place2");
$food1 = filter_input(INPUT_POST, "food1");
$food2 = filter_input(INPUT_POST, "food2");
$sound = filter_input(INPUT_POST, "sound");

print <<<HERE
<h2>
This little <span>$anim1</span> went to <span>$place1</span>, <br>
This little <span>$anim2</span> stayed at <span>$place2</span>, <br>
This little <span>$anim1</span> had <span>$food1</span>, <br>
This little <span>$anim2</span> had <span>$food2</span>. <br>
And this little <span>$anim3</span> went... <br>
<span>$sound</span> all the way home...
</h2>
HERE;
?>
</body>
</html>
