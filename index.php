<?php
  
  if (!isset($_GET['date'])) die("SET A DATE ASSHOLE");
      
  $file_db = new PDO('sqlite:itt.sqlite');
  $result = $file_db->query('SELECT * FROM charts WHERE date=' . $_GET['date']);

  foreach ($result as $date) {
    print_r($date);
  }
      
?>
