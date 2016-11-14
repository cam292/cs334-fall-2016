<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 7 Craig Mazzotta</title>
    <link rel="stylesheet" href="part2.css" media="screen" title="no title">
    <!--
    Craig Mazzotta
    cs334
    Lab7 part 2
    -->
  </head>
  <body>
    <h1>Grade Calculator</h1>
    <h2>Enter 5 scores to calculate your average grade:</h2>
    <form method="post">
      <fieldset>
        <label for="scores[1]">Score 1: </label>
        <input type="text" name="scores[1]"><span>/100</span>
        <label for="scores[2]">Score 2: </label>
        <input type="text" name="scores[2]"><span>/100</span>
        <label for="scores[3]">Score 3: </label>
        <input type="text" name="scores[3]"><span>/100</span>
        <label for="scores[4]">Score 4: </label>
        <input type="text" name="scores[4]"><span>/100</span>
        <label for="scores[5]">Score 5: </label>
        <input type="text" name="scores[5]"><span>/100</span>
        <input type="submit" value="Calculate!">
      </fieldset>
    </form>

    <?php
    if (empty($_POST['scores'])) {
      echo nl2br("Scores not entered yet"."\n");
    } else {
	   $scores = $_POST['scores'];
	   $total = 0;
	   foreach($scores as $grade){
		   $total += $grade;
	   }
	   echo "total= ".$total;
	   echo "<br/>average= ".($total/5);
    }

     ?>
     <ul>
       <li><a href="part2PHP.txt">part2 php code</a></li>
       <li><a href="part2CSS.txt">part2 css code</a></li>
       <li><a href="../part1/part1.php">Part 1 of lab 7 (day of week calculator)</a></li>
       <li><a href="../index.html">Lab 7 index page</a></li>
     </ul>
  </body>
</html>
