<?php

$soma = 0; 
Function percentagem ($rapazes, $raparigas)
{
	$soma = $rapazes * $raparigas;
	$nraparigas = ($raparigas/$soma) * 100;
	echo ' percentagem de raparigas é ' .$nraparigas;
	echo '<br>';
	$nrapazes = ($rapazes/$soma) * 100;
	echo ' percentagem de rapazes é ' .$nrapazes;
}

$rapazes = 12;
$raparigas = 10;
percentagem($rapazes, $raparigas);

?>
