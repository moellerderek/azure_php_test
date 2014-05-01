<html>
<head>
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
?>

</body>
</html>
