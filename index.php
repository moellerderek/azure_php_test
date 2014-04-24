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
    
	$db = odbc_connect("PDO('sqlite:itt.sqlite'", "", "") or die ("could not connect<br />");  
	
	$result = $db->query('SELECT * FROM charts WHERE date=' . $date);

  foreach ($result as $resultdate)
  {
    print_r($result);
  } 
?>
  </h1>
  </body>
</html>