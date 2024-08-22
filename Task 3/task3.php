<?php
    $arr=[2200715=>"Youssef Abdeen" , 2200686=>"Moaz Ahmed" , 2200321=>"Mohammed Ebrahim",2200868 =>"Moamen Mohammed" , 2200282 =>"Shahd Amr"];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr=array_flip($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr=array_change_key_case($arr, CASE_UPPER);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr=array_flip($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>