<html>
  <head>
  <title>Jew are so funny</title>
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
 <table border="1">
<caption>Dates</caption>

<?php

$date = $date = $_GET['date'];

    session_start();

    include('connect_mysql.php');


    $self = 'self';
    $feel = 'feel';
    $talk = 'talk';
    $love = 'love';
    $does = 'does';
    $grow = 'grow';
    $pull = 'pull';
    $obox = 'obox';
    $spur = 'spur';
    $stop = 'stop';
    

$sql = "SELECT * FROM charts WHERE date=' . $date");

echo "<table id='display'>";

while($rows = odbc_exec($db, $stmt))
{
    echo"<br>";
    echo"<tr><td>";
    echo"$rows[$self]<br></td>";

    echo"<td>Feel $rows[$feel] height='200px' width='200px'><br></td>";
    echo"<td>Talk $rows[$talk]<br></td>";
    echo"<td>Love $rows[$love]<br></td>";
    echo"<td>Does $rows[$does]<br></td>";    
    echo"<td>Does $rows[$grow]<br></td>";
    echo"<td>Does $rows[$pull]<br></td>";
    echo"<td>Does $rows[$obox]<br></td>";    
    echo"<td>Does $rows[$spur]<br></td>";
    echo"<td>Does $rows[$stop]<br></td>";
    
    echo"</tr>";

}

echo "</table>";

odbc_free_result($result);
odbc_close($db);

?>



  