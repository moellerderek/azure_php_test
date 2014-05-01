<html>
<title>Report</title>
<head>
</head>
<body>

<?php
$array = array(
    [0] => 'date',
    [1] => 'self',
    [2] => 'feel',
    [3] => 'talk',
    [4] => 'love',
    [5] => 'does',
    [6] => 'grow',
    [7] => 'pull',
    [8] => 'obox',
    [9] => 'spur',
    [10] => 'stop';
    )
    
    for ($i = 0; $i <  count($array); $i++) {
    $key=key($array);
    $val=$array[$key];
    if ($val<> ' ') {
       echo $key ." = ".  $val ." <br> ";
       }
     next($array);
    }

?>

</body>
</html>
