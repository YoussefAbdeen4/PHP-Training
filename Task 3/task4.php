<?php
    $arr=[2200715=>"Youssef Abdeen" , 2200686=>"Moaz Ahmed" , 2200321=>"Mohammed Ebrahim",2200868 =>"Moamen Mohammed" , 2200282 =>"Shahd Amr"];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    echo 'Check if Youssef Abdeen is found or not'.'<br><br>';
    echo in_array("Youssef Abdeen",$arr)?"Found":"Not Found";
    echo '<br><br>';
    echo 'Check if Ahmed Mohammed is found or not'.'<br><br>';
    echo in_array("Ahmed Mohammed",$arr)?"Found":"Not Found";
?>