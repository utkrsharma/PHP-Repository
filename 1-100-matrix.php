<!-- <?php
//$number = 9;
//$str = "Beijing";
//printf("There are %u million bicycles in %s.",$number,$str);
?>
 -->
<?php
for ($i=1;$i<=10;$i++) {
    for ($j=$i;$j<=($i+90);$j+=10){ 
        echo $j;
    }
    echo "<br>";
}   
?>