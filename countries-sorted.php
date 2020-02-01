<?php

$str = "Australia, Canada, Germania, Poland, China, Korea";
$sort= "=";
function sorted($string, $sorted='-'){
    $result = explode(", ", $string);
    sort($result);
    $sort_string = implode(" ", $result);
    $new_string = str_replace(" ", $sorted, $sort_string);
    return $new_string;

}

echo sorted($str);

?>