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
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="masthead">

      <?php

        include ("masthead.php");

      ?>
    </div>

<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>Birthday Calculator</h1>
			<p>This project is to take a Get Request, and a SQL query and do 				something with them.</p>
		</div>
	</div>
<br>

<?php
//get request  
  $date = $_GET['date'];

  if (!isset($date)) die("SET A DATE ASSHOLE");
  if ($date < 19200101 OR $date > 20191207) die("WRONG DATE ASSHOLE");

//SQL query and record return  
	$conn = new PDO('sqlite:itt.sqlite');
	$sql = 'SELECT * FROM charts WHERE date='.$date;

	echo "<pre>".print_r($conn->query($sql)->fetchAll(),true)."</pre><br />";
	//$result = $conn->query($sql)->fetchAll(),true;

//Coverts results into something readable and alterable in HTML/CSS
//	while (array ($conn->query($sql)->fetchAll(),true)
//{
//	$bday = $row["date"];
//    $self = $row["self"];
//    $feel = $row["feel"];
//    $talk = $row["talk"];
//    $love = $row["love"];
//    $does = $row["does"];
//    $grow = $row["grow"];
//    $pull = $row["pull"];
//    $obox = $row["obox"];
//    $spur = $row["spur"];
//    $stop = $row["love"];
//}	
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
<footer>
<?php
	
	include ("footer.php");
	
?>
</footer>
</html>
