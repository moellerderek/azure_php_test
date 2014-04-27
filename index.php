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

	//$array = $conn->query($sql)->fetchAll(),true;
      
	echo "<pre>".print_r($conn->query($sql)->fetchAll(),true)."</pre><br />";
	//echo "<pre>".print_r($array)."</pre><br />";

	//include (report.php);
	
?>
  </h1>
  </body>
</html>
