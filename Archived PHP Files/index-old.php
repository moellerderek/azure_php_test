<?php 
	
	include ('functions.php'); 
	
?>

<html>
<head>
<title>Birthdate Calculator</title>
  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
  <link href="/css/index.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
	<link href="/css/jumbotron.css" rel="stylesheet">
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

callMasthead("Birthday Calculator");

?>
<!-- <div class="masthead">

      <?php

        include ("masthead.php");

      ?>
    </div>
 -->
<!-- Main jumbotron for a primary marketing message or call to action -->

 <?php
 
	callJumboTron("Birthday Calculator","This project is to take a Get Request, and a SQL query and do something with them."); 
?>

<br>

<!-- Container for SQL Results -->
	<div class="container">
		<div class="row">
			<div class="col-md-2">
			
			
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
							echo "<ul>";
							echo "<li>".$name."</li>";
							echo "</ul>";
						}
					}
/*				<li>Date</li>
    			<li>Self</li>
    			<li>Feel</li>
    			<li>Talk</li>
    			<li>Love</li>
    			<li>Does</li>
    			<li>Grow</li>
    			<li>Pull</li>
    			<li>Obox</li>
    			<li>Spur</li>
    			<li>Stop</li>   
*/  		?>
			</div>

<?php
	
	include ('index-sqltable.php');

?>
		</div>
	</div>
</body>

<footer>
<br>
<?php

	callFooter(); 
	echo returnSecondFooter("derek");

?>
  
<br>
</footer>
</html>