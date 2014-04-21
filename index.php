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
    
    echo'<table>';
    echo'<tr>'. $row[0]."</tr>"; 
    echo'<td>'. $row[1]."</td>";
    echo'<td>'. $row[2].'</td>';
    echo'<td>'. $row[3].'</td>';
    echo'<td>'. $row[4]."</td>";
    echo'<td>'. $row[5].'</td>';
    echo'<td>'. $row[6].'</td>';
    echo'<td>'. $row[7]."</td>";
    echo'<td>'. $row[8].'</td>';
    echo'<td>'. $row[9].'</td>';
    echo'<tr>'.'</tr>';
    echo'</table>';
  }
      
      
?>
  </h1>
  </body>
</html>