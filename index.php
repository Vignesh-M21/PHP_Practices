<?php
    $x=10;
    $y=20;
    function addition(){
        global $x,$y;
        $y = $x + $y;
    }
    addition();
    echo "helllo $y";
?>