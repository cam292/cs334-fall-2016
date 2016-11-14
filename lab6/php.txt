<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 6- Craig Mazzotta</title>
<link rel="stylesheet" href="style.css" media="screen" title="no title">
  <!--
    Craig Mazzotta
    cs334
    lab6
    -->
  </head>
  <body>
    <a href="php.txt">php code</a>
    <a href="css.txt">css code</a>
    <h1>Fizzy Buzz!</h1>
    <h3>Numbers divisible by 3 are Fizzy, and numbers divisible by 5 are Buzzy!</h3>
    <h3>Numbers divisible by <strong>both</strong> 3 & 5 are FizzyBuzzy!</h3>
    <?php
      print "<p>";
      for($i=1;$i<101;$i++){
        if(($i % 3) == 0 && ($i % 5) == 0){
          print "<span class=\"fb\">FizzyBuzzy</span><br>";
        } elseif(($i % 3) == 0){
          print "<span class=\"f\">Fizz</span><br>";
        } elseif (($i % 5) == 0) {
          echo "<span class=\"b\">Buzz</span><br>";
        } else{
          print "<span class=\"i\">$i</span> <br>";
        }
      }
      print "</p>";
     ?>
  </body>
</html>
