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
  
	$conn = new PDO('sqlite:itt.sqlite');
	$sql = 'SELECT * FROM charts WHERE date='.$date;

	//$result = $conn->query($sql)->fetchAll(),true);
	
$result = array($sql)->fetchAll(),true){
    $date = $row[0];
    $self = $row[1];
    $feel = $row[2];
    $talk = $row[3];
    $love = $row[4];
    $does = $row[4];
    $grow = $row[5];
    $pull = $row[6];
    $obox = $row[7];
    $spur = $row[8];
    $stop = $row[9];
}
      
	//print_r($result);

    
//foreach ($result) {
//		echo "<pre>";
//  	print_r ($result);
//  	echo "</pre>"."<br>";
//  	}

	//echo "<pre>".print_r($result)."</pre><br />";
echo "<pre>".print_r($conn->query($sql)->fetchAll(),true)."</pre><br />";
	//echo "<pre>".print_r($array)." \n"."</pre><br />";

	//include (report.php);
?>
  </h1>
  </body>
</html>
