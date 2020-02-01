<?php

$array = [
    'https://itea.ua',
    'https://wikipedia.org',
    'https://taobao.com',
    'https://rozetka.com.ua',
    'https://www.google.com',
    'https://www.amazon.com',
    'https://www.php.net',
    'https://allegro.pl',
    'https://telegram.org',
    'https://www.ebay.com',
    'https://www.mobile.de',
    'https://prom.ua',
    'https://aliexpress.com',
    'https://www.ukr.net',
];

function filtrator($mas, $str){
    $pattern = '/^.*\.' . $str .'/';
    $arr = [];
    $it=0;
    foreach ($mas as $item){
        if (preg_match($pattern, $item) == 1){
            $arr[$it]=$item;
            $it++;

        }
    }

    return $arr;
}
$result = filtrator($array, 'com');

print_r($result);

?>