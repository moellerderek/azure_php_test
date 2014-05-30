<?php 
	
	include ('functions.php'); 
	
?>

<html>
<head>
<title>Birthdate Calculator</title>

<!-- Google Fonts Library -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>

<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap-derek.css" rel="stylesheet">

<!-- Custom styles for this template -->
	<link href="/css/sticky-footer.css" rel="stylesheet">
<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
	</script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
	</script>
<![endif]-->
</head>

<body>

<?php

callMasthead("Birthday Calculator", "voteforderek.azsurewebsites.net", "http://numbergenerator.azurewebsites.net/?num=25", "Number Counter", "#", "");

?>

<!-- Main jumbotron for a primary marketing message or call to action -->

<?php
 
	callJumboTron("Birthday Calculator","This project is to take a Get Request, and a SQL query and do something with them."); 
?>

<br>

<!-- Container for SQL Results -->
	<div class="container">
		<div class="row">
			<div class="col-md-1">
			
			
			<?php
					$date = $_GET['date'];
					$conn = new PDO('sqlite:itt.sqlite');
					$sql = 'SELECT * FROM charts WHERE date='.$date;
					$astro = $conn->query($sql);

					foreach ($astro as $row)
					{
						$keys = array_keys($row);
					}
					foreach ($keys as $name) 
					{
						if (!is_numeric($name))
						{
							echo "<li>".$name."</li>";
						}
					}
?>
			</div>

<?php
	
	include ('index-sqltable.php');

?>
		</div>
	</div>
</body>

<br>
<?php

callFooter(":)")

?>
  
<br>
</html>