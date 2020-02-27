<?php
function compareTriplets($a, $b) {
    $cmparray=[];
    $ascore=0;
    $bscore=0;    
    
    for($i=0;$i<count($a);$i++) {
        if($a[$i]>$b[$i]){
            $ascore++;
        }
        elseif($a[$i]<$b[$i]) {
            $bscore++;
        }
        else {
            $ascore=$ascore;
            $bscore=$bscore;
        }
    }
    array_push($cmparray,$ascore);
    array_push($cmparray,$bscore);
    
    return $cmparray;

}
$a=[5,6,7];
$b=[3,6,10];
print_r(compareTriplets($a,$b));
?>