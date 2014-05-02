<?php

function callJumboTron($h1,$p) {

echo '<div class="jumbotron">';
echo '<div class="container">';
echo '<h1>' . $h1 . '</h1>';
echo '<p>' . $p . '</p>';
echo '</div>';
echo '</div>';

}

function callFooter() {

echo "we're done";

}

function returnSecondFooter($brandon) {

	$thingy = strlen($brandon);
	$thingy = $thingy * 2;
	
	return $thingy;

}

function callKeyNames() {
  print_r(array_keys($conn->query($sql)));
}
?>