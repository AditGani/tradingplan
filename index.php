<?php
$a = 2695886;
$b = substr($a,0,4). ".". substr($a,4,3);
$lot = 0.01;
$i = $a;
$hit = 0;
while($i<2708786){
    if($lot > 0.9){
        $hit = substr($lot, 0)."00";
    } else if($lot > 0.09){
        $hit = substr($lot, 2)."0";
    } else {
        $hit = substr($lot, 2);
    }
    $b = substr($a,0,4). ".". substr($a,4,3);
    $c = substr($i,0,4). ".". substr($i,4,3);
    echo $b." - ".$c.": ". number_format(15875 * ($c - $b) * $hit);
    $tot = 0;
    $j = 1;
    while($j<10000){
        $tot += 15875 * ($c - $b) * $hit;
        if($tot>=5000000){
            break;
        }
        $j++;
    }
    echo " sebanyak ". $j ."kali<br>";
    $i++;
}
?>