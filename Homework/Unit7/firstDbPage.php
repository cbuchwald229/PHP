<?php
//Step1
 $db = mysqli_connect('localhost','cbuchwald229_341','Brooke132','cbuchwald229_341')
 or die('Error connecting to MySQL server.');
?>
<!DOCTYPE HTML>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Database Testing</title>
   <style>
     body {
       background-color: purple;
       color: lavender;
     }
   </style>
 </head>
 <body>
   <h1>PHP connect to MySQL</h1>

    <?php
    //Step2
    $query = "SELECT * FROM wdv341_event";
    mysqli_query($db, $query) or die('Error querying database.');

    $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_array($result)) {
     echo $row['event_id'] . ' ' . $row['event_name'] . ' ' . $row['event_description'] . ' ' . $row['event_presenter'] .' ' . $row['event_date'] .' ' . $row['event_time'] .'<br />';
    }

    mysqli_close($db);
    ?>
    <!--It's not pretty but it works and is bringing back the data!!-->
  </body>
</html>
