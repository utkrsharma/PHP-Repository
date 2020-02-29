<?php
function diagonalDifference($arr) {
    // Write your code here
    $p_diag=0;
    $s_diag=0;
    for($i=0;$i<count($arr);$i++) {
        $p_diag=$p_diag+$arr[$i][$i];
    }
    $k=0;
    for($j=count($arr)-1;$j>=0;$j--) {
        $s_diag=$s_diag+$arr[$j][$k];
        $k++;
    }
    $diag_diff = abs($p_diag - $s_diag);
    return $diag_diff;
}
$arr=[[11,2,4],[4,5,6],[10,8,-12]];
for ($i=0;$i<count($arr);$i++) {
	print_r($arr[$i]);
	echo "<br>";
}
//echo "<pre>";
//print_r($arr);
echo "<br>";
echo "The difference is"." ".diagonalDifference($arr);
?>