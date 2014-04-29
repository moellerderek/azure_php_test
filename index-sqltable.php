<html>
  <head>
  <title>Jew are so funny</title>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
  <link href="index.css" rel="stylesheet">
  </head>
  <body>
  <h1>

<?php
//get request  
  $date = $_GET['date'];

  if (!isset($date)) die("SET A DATE ASSHOLE");
  if ($date < 19200101 OR $date > 20191207) die("WRONG DATE ASSHOLE");

//SQL query and record return  
	$conn = new PDO('sqlite:itt.sqlite');
	$sql = 'SELECT * FROM charts WHERE date='.$date;

	//echo "<pre>".print_r($conn->query($sql)->fetchAll(),true)."</pre><br />";
	$result = $conn->query($sql)->fetchAll(),true;

//Coverts results into something readable and alterable in HTML/CSS
	while ($row = $conn->query($sql)->fetchAll())
{
	$bday = $row["date"];
    $self = $row["self"];
    $feel = $row["feel"];
    $talk = $row["talk"];
    $love = $row["love"];
    $does = $row["does"];
    $grow = $row["grow"];
    $pull = $row["pull"];
    $obox = $row["obox"];
    $spur = $row["spur"];
    $stop = $row["love"];
}	
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
