<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Midterm Craig Mazzotta</title>
    <link rel="stylesheet" href="main.css" media="screen" title="no title">
    <!--
    Craig Mazzotta
    cs334
    Midterm
    -->
  </head>
  <body>
    <h1>cs334 Midterm</h1>
    <h3>by Craig Mazzotta</h3>
    <?php
    //array containing months and corresponding days
    $months = array("January"=>31,"February"=>28,"March"=>31,"April"=>30,"May"=>31,"June"=>30,"July"=>31,"August"=>31,"September"=>30,"October"=>31,"November"=>30,"December"=>31);

    //sort by month in ascending order and print table
    ksort($months);
    echo "<table>";
    foreach($months as $month=>$numDays){
      echo "<tr>";
      echo "<td>$month</td>";
      echo "<td>$numDays</td>";
      echo "</tr>";
    }
    echo "</table>";
     ?>

    <ul>
      <li><a href="phpCode.txt">php code</a></li>
      <li><a href="cssCode.txt">css code</a></li>
    </ul>
  </body>
</html>
