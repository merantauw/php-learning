<?php

//$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//
//echo '<pre>';
//for ($i = 0; $i < 11; $i++){
//    if ($nums[$i] % 2 === 0){
//        continue;
//    }
//    echo $nums[$i] . '<br>';
//}
//echo '</pre>';


$goods = [
    [
        'title'=> 'Nokia',
        'price'=> '100',
        'qty'=> '10'
    ],
    [
        'title'=> 'Sony',
        'price'=> '120',
        'qty'=> '7'
    ],
    [
        'title'=> 'LG',
        'price'=> '105',
        'qty'=> '15'
    ],
];


for ($i = 0; $i < 3; $i++){
    if ($goods[$i]['price'] < 120){
        $goods[$i]['price'] += 15;
    }
    echo '<pre>';
    print_r ($goods[$i]);
    echo '</pre>';
}