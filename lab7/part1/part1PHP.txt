<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 7 Craig Mazzotta</title>
    <link rel="stylesheet" href="part1.css" media="screen" title="no title">
    <!--
    Craig Mazzotta
    cs334
    Lab7 part 1
    -->
  </head>
  <body>
    <h1>Day of the Week Calculator</h1>
    <?php

    printDays();
    printForm();
    calcDay();

    /*
    * Prints the days of the week in a ordered list
    */
    function printDays(){
      $daysOfWeek=array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

      print "<p>The days of the week in sequence are: </p>";
      print "<div id=\"days\"><ol>";
      foreach($daysOfWeek as $day){
        echo "<li>$day</li>";
      }
      print "</ol><br></div>";
    }

    /*
    *  Uses for loops to print options to keep code clean.
    *  In doing so, it restricts year selection from 1900-2016.
    */
    function printForm(){
print <<<HERE
<h2>Enter your birthdate to find out what day of the week you were born!</h2>
<form method="post">
  <fieldset>
    <label for="month">Month: </label>
    <select name="month">
HERE;
    for($i=1;$i<13;$i++){
      print "<option value=\"$i\">$i</option>";
    }
print <<<HERE
    </select>

    <label for="day">Day: </label>
    <select name="day">
HERE;
    for($i=1;$i<32;$i++){
      print "<option value=\"$i\">$i</option>";
    }
print <<<HERE
    </select>
    <label for="month">Year: </label>
    <select name="year">
HERE;
    for($i=2016;$i>1899;$i--){
      print "<option value=\"$i\">$i</option>";
    }
print <<<HERE
    </select>
    <input type="submit" value="Calculate!">
  </fieldset>
</form>
HERE;
    }

    /*
    * Handles user's form input to calculate day of the week
    * the user was born
    */
    function calcDay(){
      $month = filter_input(INPUT_POST, "month");
      $day = filter_input(INPUT_POST, "day");
      $year = filter_input(INPUT_POST, "year");

      if(!empty($month)){
        Print "<p><strong>Birthdate entered: </strong>".date("M-d-Y",mktime(0,0,0,$month,$day,$year)."</p><br>");
        Print "<p>Your birthday was on a <strong>".date("l", mktime(0,0,0,$month,$day,$year))."</strong>!</p>";
        makeCalendar($month,$day,$year);
        $year = 0;
      }
    }

    /*
    * Prints a table representation of a calendar of the month of the user's birthday
    */
    function makeCalendar($month,$birthDay,$year){
      $daysInMonth = date('t',mktime(0,0,0,$month,01,$year));
      $dayOffset = date("w",mktime(0,0,0,$month,01,$year));

      print "<table>";
      print "<tr>";
        print "<th>Sunday</th>";
        print "<th>Monday</th>";
        print "<th>Tuesday</th>";
        print "<th>Wednesday</th>";
        print "<th>Thursday</th>";
        print "<th>Friday</th>";
        print "<th>Saturday</th>";
      print "</tr>";

      $day=1;
      for($row=0;$row<6;$row++){
        if($day>$daysInMonth){
          $column=7;
        }else{
          print "<tr>";
          $column=0;
        }
        if($row==0){
          $column=$dayOffset;
          for($i=0;$i<$dayOffset;$i++){
            print "<td> </td>";
          }
        }
        for(;$column<7;$column++){
          if($day>$daysInMonth){
            print "<td> </td>";
          } elseif($day == $birthDay){
            print "<td id=\"birthday\"><strong>$day</strong></td>";
          } else {
            print "<td>$day</td>";
          }
          $day++;
        }
        if((!$date>$daysInMonth)){
          print "</tr>";
        }
      }
      print "</table>";
    }
     ?>
     <ul>
       <li><a href="part1PHP.txt">part1 php code</a></li>
       <li><a href="part1CSS.txt">part1 css code</a></li>
       <li><a href="../part2/part2.php">Part 2 of lab 7 (grade calculator)</a></li>
       <li><a href="../index.html">Lab 7 index page</a></li>
     </ul>
  </body>
</html>
