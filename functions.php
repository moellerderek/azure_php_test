<?php

function callMasthead($title, $home, $l1, $tl1, $l2, $tl2) {
		echo '<div class='.'"navbar navbar-inverse navbar-fixed-top"'. 'role='.'"navigation">';
			echo '<div class='.'"container">';
					echo '<div class='.'"navbar-header">';
						echo '<button type'.'="button"'.'class='.'"navbar-toggle"'.'data-toggle='.'"collapse"'.'data-target='.'"'.'.navbar-collapse"'.'>';
							echo '<span class='.'"sr-only"'.'>Toggle navigation'.'</span>';
							echo '<span class='.'"icon-bar"'.'></span>';
							echo '<span class='.'"icon-bar"'.'></span>';
							echo '<span class='.'"icon-bar"'.'></span>';
						echo '</button>';
          			echo '<a class='.'"navbar-brand"'. 'href='.'"#"'.'>'.$title.'</a>';
        			echo '</div>';
        			echo '<div class='.'"collapse navbar-collapse"'.'>';
          			echo '<ul class='.'"nav navbar-nav"'.'>';
            			echo '<li>'.'<a href='.$home.'>Home</a></li>';
            			/* echo '<li><a href='.'"#about"'.'>About</a></li>';
            			echo '<li><a href='.'"#contact"'.'>Contact</a></li>';*/
            			echo '<li class='.'"active"'.'>'.'<a href='."$l1".'>'.$tl1.'</a></li>';
            			echo '<li><a href='."$l2".'>'.$tl2.'</a></li>';
            		echo '</ul>';
        		echo '</div><!--/'.'.nav-collapse -->';
      		echo '</div>';
    	echo '</div>';
    	return $title;
}

function callJumboTron($h1,$p) {
	echo '<div class='.'"jumbotron"'.'>';
		echo '<div class='.'"container"'.'>';
			echo '<h1>' . $h1 . '</h1>';
			echo '<p>' . $p . '</p>';
		echo '</div>';
	echo '</div>';

}

function callFooter($foot) {

echo '<footer>';
echo '<div id='.'"footer"'.'>';
		echo '<div class='.'"container"'.'>';
        echo '<p class='.'"text-muted"'.'>'.$foot.'</p>';
      	echo '</div>';
echo '</div>';
echo '</footer>';
}

function returnSecondFooter($brandon) {

	$thingy = strlen($brandon);
	$thingy = $thingy * 2;
	
	return $thingy;
}

?>