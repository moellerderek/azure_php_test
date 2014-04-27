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

	echo "<pre>".print_r($conn->query($sql)->fetchAll(),true)."</pre><br />";
?>
<br>
//<?php
//	  $birthdate = result[0];
//    $self = result[1];
//    $feel = result[2];
//    $talk = result[3];
//    $love = result[4];
//    $does = result[5];
//    $grow = result[6];
//    $pull = result[7];
//    $obox = result[8];
//    $spur = result[9];
//    $stop = result[10];
	
//echo "<div class="mesa">"."<p>".$date."</p>"."</div>";
  		
//$result = $conn->query($sql)->fetchAll(),true);
  
	//print_r($result);
   
	//foreach ($result) {
	//		echo "<pre>";
	//  	print_r ($result);
	//  	echo "</pre>"."<br>";
	//  	}

	//echo "<pre>".print_r($result)."</pre><br />";
	//echo "<pre>".print_r($array)." \n"."</pre><br />";
	//include (report.php);
?>
  </h1>
  </body>
</html>
