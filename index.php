<html>
  <head>
  <title>Jew are so funny</title>
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
 <table border="1">
<caption>Dates</caption>
<tr>
  <tr>
<th>Self</th>
<th>Feel</th>
<th>Talk</th>
<th>Love</th>
<th>Does</th>
<th>Grow</th>
<th>Pull</th>
<th>Obox</th>
<th>Spur</th>
<th>Stop</th>
</tr>

<?php

	$date = $date = $_GET['date'];

	$db = odbc_connect("PDO('sqlite:itt.sqlite'", "", "") or die ("could not connect<br />");

	$stmt = "SELECT * FROM charts WHERE date=' . $date";

	$result = odbc_exec($db, $stmt);

  if ($result == FALSE) die ("could not execute statement $stmt<br />");

  while (odbc_fetch_row($result)) // while there are rows
  {
     print "<tr>\n";
     print "  <td>" . odbc_result($result, "Self") . "\n";
     print "  <td>" . odbc_result($result, "Feel") . "\n";
     print "  <td>" . odbc_result($result, "Talk") . "\n";
     print "  <td>" . odbc_result($result, "Love") . "\n";
     print "  <td>" . odbc_result($result, "Does") . "\n";
     print "  <td>" . odbc_result($result, "Grow") . "\n";
     print "  <td>" . odbc_result($result, "Pull") . "\n";
     print "  <td>" . odbc_result($result, "Obox") . "\n";
     print "  <td>" . odbc_result($result, "Spur") . "\n";
     print "  <td>" . odbc_result($result, "Stop") . "\n";
     print "</tr>\n";
  }

  odbc_free_result($result);

  odbc_close($db);
?>
  </h1>
  </body>
</html>
  