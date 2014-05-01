<?php 
	
	include ('functions.php'); 
	
?>

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
//	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
//	</script>
//	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
//	</script>
<![endif]-->
</head>

<body>
<div class="masthead">

      <?php

        include ("masthead.php");

      ?>
    </div>

<!-- Main jumbotron for a primary marketing message or call to action -->

<?php
 
	callJumboTron("Birthday Calculator","This project is to take a Get Request, and a SQL query and do something with them."); 
?>

<br>

<div class="sql">
	<div class="row">
		<div class="col-md-4">
<?php
	
	include ('index-sqltable.php');

?>
		</div>
	</div>
</div>

</body>
<br>

<footer>
<?php
	
	include ("footer.php");
	callFooter(); 
	echo returnSecondFooter("derek");
	
?>
</footer>
</html>