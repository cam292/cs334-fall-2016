<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 8 Craig Mazzotta</title>
    <!--
    Craig Mazzotta
    cs334
    lab 8
    -->
  </head>
  <body>
    <?php
    //load form data to info array
    $info = $_POST['data'];

    if(empty($info)){
      print "Please return to the form and enter information ";
      print "<a href=\"index.html\">form</a>";
    } else{
      buildMas($info);
      buildHTML($info);
      print "<a href=\"files/guestBook.mas\">mas file</a><br>";
      print "<a href=\"files/gbHtml.txt\">html txt file</a><br>";
      print "<a href=\"index.html\">Back to form</a>";
    }

    function buildMas($newInfo){
      $masFile =  "files/guestBook.mas";
      $msfp = fopen($masFile, "a"); //append to mas file to keep all records

      foreach ($newInfo as $userInfo) {
        $masData .= $userInfo."\n";
      }
      $masData.="\n"; //new line to separate entries

      fputs($msfp, $masData); //write masData to file
      fclose ($msfp); //close mas file
    }

    function buildHTML($newInfo){
      $htmlFile = "files/guestBook.html";
      $hTXTfile = "files/gbHtml.txt"; //text file version
      $htfp = fopen($htmlFile, "w"); //overwrite html file with most recent guest
      $htxt = fopen($hTXTfile,"w");

    $htData = <<<HERE

<!DOCTYPE html >
<html lang="EN" >
<head>
<title>$info[1]</title>
</head>
<body>
<h1>New User:</h1>
<p>
$newInfo[0]<br>
$newInfo[1]<br>
$newInfo[2]<br>
$newInfo[3]<br>
$newInfo[4]<br>
$newInfo[5]<br>
$newInfo[6]<br>
$newInfo[7]<br>
$newInfo[8]
</p>
</body>
</html>
HERE;

      fputs($htfp, $htData); //write to html file
      fputs($htxt, $htData);
      fclose($htfp); //close the file
      fclose($htxt);
      print $htData; //display current user's info
    }
     ?>
  </body>
</html>
