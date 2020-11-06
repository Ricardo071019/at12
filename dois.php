<?php

function inteiro ($num){
	if ($num  %2 == 0 )
	{
		return true;
	}
	 else 
	 {
	 	return false;
	 }
}
 $num = rand(1,5000);
 if ( inteiro($num)) {
 	echo $num. ' é par';
 }

 else {
 	echo $num. ' é impar';
 }


?>