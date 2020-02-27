<?php


function ArrSum($arr) {
	$x=0;
	foreach ($arr as $value) {
		# code...
		$x=$x+$value;
	}
	return $x;
}

 echo ArrSum([1000000001,1000000002,1000000003,1000000004,1000000005]);
?>