<?php
    $sum=0;
    $n1=1;
    $n2=1;
    echo "<b> fibonacci series</b><br>";
    echo "$n1 $n2 ";
    for( $i=3; $i<10; $i++)
    {
        $sum=$n1+$n2;
        echo " $sum" ;
        $n1=$n2;
        $n2=$sum;
    }
?>