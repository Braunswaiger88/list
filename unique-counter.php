<?php

$array = [3, 9, 18, 36, 72, 2, 4, 16, 36, 14, 10];
function unique($mas){
    $res=array_unique(\$mas);


    $counter = count($res);
    return $counter;

}


echo unique($array);

?>