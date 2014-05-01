<html>
<head>
<title>Jew are so funny</title>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
  <link href="/css/index.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">
  <link href="/css/sticky-footer.css" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
//  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
//  </script>
//  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
//  </script>
<![endif]-->
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

echo "<div class=col-md-4";
    echo "Date";
    echo "Self";
    echo "Feel";
    echo "Talk";
    echo "Love";
    echo "Does";
    echo "Grow";
    echo "Pull";
    echo "Obox";
    echo "Spur";
    echo "Stop";
echo "</div>";

echo("<div class=col-md-4>");
//Coverts results into something readable and alterable in HTML/CSS
	foreach ($conn->query($sql) as $row)
	{
	  print $row['date']."\t"."<br>";
    print $row['self']."\t"."<br>";
    print $row['feel']."\t"."<br>";
    print $row['talk']."\t"."<br>";
    print $row['love']."\t"."<br>";
    print $row['does']."\t"."<br>";
    print $row['grow']."\t"."<br>";
    print $row['pull']."\t"."<br>";
    print $row['obox']."\t"."<br>";
    print $row['spur']."\t"."<br>";
    print $row['stop']."\t"."<br>";
	}
echo "</div>";

?>

</body>
</html>
