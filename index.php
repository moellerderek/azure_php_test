<html>
  <head>
  <title>Jew are so funny</title>
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
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
      echo "<table border='1'>
<tr>
<th>Self</th>
<th>Feel</th>
<th>Talk</th>
<th>Love</th>
<th>Does</th>
<th>Grow</th>
<th>Pull</th>
<th>Obox</th>
<th>Spur</th>
<th>Stop</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Self'] . "</td>";
  echo "<td>" . $row['Feel'] . "</td>";
  echo "<td>" . $row['Talk'] . "</td>";
  echo "<td>" . $row['Love'] . "</td>";
  echo "<td>" . $row['Does'] . "</td>";
  echo "<td>" . $row['Grow'] . "</td>";
  echo "<td>" . $row['Pull'] . "</td>";
  echo "<td>" . $row['Obox'] . "</td>";
  echo "<td>" . $row['Spur'] . "</td>";
  echo "<td>" . $row['Stop'] . "</td>";  
  echo "</tr>";
  }
echo "</table>";
    print_r($resultdate);
  }
      
?>
  </h1>
  </body>
</html>
  