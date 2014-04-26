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
  $sqliteerror = echo "Shits broke, yo.";

  if (!isset($date)) die("SET A DATE ASSHOLE");
  if ($date < 19200101 OR $date > 20191207) die("WRONG DATE ASSHOLE");
  
if ($db = sqlite_open('sqlite:itt.sqlite', 0666, $sqliteerror)) { 
    //sqlite_query($db, 'CREATE TABLE foo (bar varchar(10))');
    //sqlite_query($db, "INSERT INTO foo VALUES ('fnord')");
    $result = sqlite_query($db, 'SELECT * FROM charts WHERE date=".$date');
    var_dump(sqlite_fetch_array($result)); 
	}
else {
    die($sqliteerror);
	}
	//$file_db = new PDO('sqlite:itt.sqlite');
	//$statement = $sqlite->prepare(SELECT * FROM charts WHERE date=".$date);
	//{
	//     $statement->execute();
	//}

	//$result = $statement->fetchAll();
print_r($result);
?>
  </h1>
  </body>
</html>