<?php
//get request  
  $date = $_GET['date'];

  if (!isset($date)) die("SET A DATE ASSHOLE");
  if ($date < 19200101 OR $date > 20191207) die("WRONG DATE ASSHOLE");

//SQL query and record return  
	$conn = new PDO('sqlite:itt.sqlite');
	$sql = 'SELECT * FROM charts WHERE date='.$date;
	$astro = $conn->query($sql);

//Coverts result into its own tabular result
	foreach ($astro as $row)
	{
		for ($i = 0; $i <= count($row); $i++)
		{
			print $row[$i]."\t <br>";
		}
	}
	
?>
