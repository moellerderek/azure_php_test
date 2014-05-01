<html>
<head>
</head>
<body>

<?php
//get request  
  $date = $_GET['date'];

  if (!isset($date)) die("SET A DATE ASSHOLE");
  if ($date < 19200101 OR $date > 20191207) die("WRONG DATE ASSHOLE");

//SQL query and record return  
	$conn = new PDO('sqlite:itt.sqlite');
	$sql = 'SELECT * FROM charts WHERE date='.$date;

//Coverts results into something readable and alterable in HTML/CSS
	foreach ($conn->query($sql) as $row)
	{
	print "Date".":".$row['date']."\t"."<br>";
	print "Self".":".$row['self']."\t"."<br>";
    print "Feel".":".$row['feel']."\t"."<br>";
    print "Talk".":".$row['talk']."\t"."<br>";
    print "Love".":".$row['love']."\t"."<br>";
    print "Does".":".$row['does']."\t"."<br>";
    print "Grow".":".$row['grow']."\t"."<br>";
    print "Pull".":".$row['pull']."\t"."<br>";
    print "Obox".":".$row['obox']."\t"."<br>";
    print "Spur".":".$row['spur']."\t"."<br>";
    print "Stop".":".$row['stop']."\t"."<br>";
	}
	
	//$row = $stmt->fetchObject();
	

//	$loc = $conn->query($sql)->fetchAll(),true;

//echo print_r($loc);
//echo "<pre>".print_r($conn->query($sql)->fetchAll(),true)."</pre><br />";
//$result = $conn->query($sql)->fetchAll(),true;


/*foreach ($stmt as $key => $value) {
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
    $stop = $row["stop"];
}	
*/
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

</body>
</html>
