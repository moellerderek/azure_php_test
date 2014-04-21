<html>
  <head>
  <title>Jew are so funny</title>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
  <link href="index.css" rel="stylesheet">
  </head>
  <body>
  <h1>
<?php
  
  $date = $_GET['date'];
  
  if (!isset($date)) die("SET A DATE ASSHOLE");
  if ($date < 19200101 OR $date > 20191207) die("WRONG DATE ASSHOLE");
      
  $file_db = new PDO('sqlite:itt.sqlite');
  $result = $file_db->query('SELECT * FROM charts WHERE date=' . $date);

  foreach ($result as $resultdate) {
    print_r($result)
    
    //echo'<table>';
    //echo'<tr>'. $row['date']."</tr>"; 
    //echo'<tr>'. $row['self']."</tr>";
    //echo'<tr>'. $row['talk'].'</tr>';
    //echo'<tr>'. $row['love'].'</tr>';
    //echo'<tr>'. $row['does']."</tr>";
    //echo'<tr>'. $row['grow'].'</tr>';
    //echo'<tr>'. $row['pull'].'</tr>';
    //echo'<tr>'. $row['obox']."</tr>";
    //echo'<tr>'. $row['spur'].'</tr>';
    //echo'<tr>'. $row['stop'].'</tr>';
    //echo'<tr>'.'</tr>';
    //echo'</table>';
  }
      
      
?>
  </h1>
  </body>
</html>