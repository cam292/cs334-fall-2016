<!DOCTYPE html>
<html>
  <head>
    <!--
       Craig Mazzotta
       cs0334
       Lab 3 submission
    -->
    <meta charset="utf-8">
    <title>Craig Mazzotta Lab 3</title>
    <link rel="stylesheet" href="main.css" media="screen" title="no title">
  </head>
  <body>
    <div class="source">
      <a href="index.txt">html/php code here</a>
      <a href="css.txt">css code here</a>
      <a href="tips.txt">external text file here</a>
    </div>
    <h1>Tip of the day</h1>
    <?php
      print "<h3>Here's your tip:</h3>";
     ?>
    <div class="tip">
      <?php
        readfile("tips.txt");
      ?>
    </div>
  </body>
</html>
