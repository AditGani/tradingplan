<?php
$im = 2659682;
$ib = 2663368;
$top = 2676000;
while($im<=$ib){
    // $a = $im;
    $a = 2675900;
    $lot = 30;
    $i = $a;
    $hit = 0;
    while($i<=$top){
        if($lot > 0.9){
            $hit = substr($lot, 0)."00";
        } else if($lot > 0.09){
            $hit = substr($lot, 2)."0";
        } else {
            $hit = substr($lot, 2);
        }
        $b = substr($a,0,4). ".". substr($a,4,3);
        $c = substr($i,0,4). ".". substr($i,4,3);
        echo $b." - ".$c.": ". number_format(15930 * ($c - $b) * $hit);
        /* $tot = 0;
        $j = 1;
        while($j<10000){
            $tot += 15875 * ($c - $b) * $hit;
            if($tot>=10000000){
                break;
            }
            $j++;
        }
        echo " sebanyak ". $j ."kali<br>"; */
        $i++;
        echo "<br>";
    }
    $x = 0;
    while($i<500){
        echo "===";
        $x++;
    }
    echo "<br>";
    $im++;
}
?>