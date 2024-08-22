<?php
    $arr=[1,8,3,4,9,2,8,7,5,4,3,1,6,10,25,52,12,25,52,12,9,10,7,3];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr=array_unique($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr=array_values($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>