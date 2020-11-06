<?php

define('PI', 3.14);
$raio = rand(1,300);

function area ($raio){
	$area = $raio * $raio * PI;
	return $area;
}
echo 'a area do circulo com raio '  .$raio. ' e ' .area($raio);

?>