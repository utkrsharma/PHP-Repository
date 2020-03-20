<?php
$a=[1=>1,raj=>4,ra=>2];
// ksort($a);
// foreach ($a as $key=>$value) {
//  	# code...
//  echo $key.$value."<br>";
// }
// krsort($a);
// foreach ($a as $key=>$value) {
//  	# code...
//  echo $key.$value."<br>";
// }
asort($a);
foreach ($a as $key=>$value) {
 	# code...
 echo $key.$value."<br>";
}

?>