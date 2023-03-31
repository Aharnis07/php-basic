<?php

    $a = 10;
    $b = 15;
    $c = 5;
    function test(){
        global $a,$b,$c ;
        $b = ($a + $b) / $c;
    }
    test();
    echo $b;
?>