<?php

/*$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<pre>';
for ($i = 1; $i < 10; $i+=2){
    echo $nums[$i] . '<br>';
}
echo '</pre>';

echo '<pre>';
for ($i = 0; $i < 10; $i++){
    if ($nums[$i] % 2 === 0){
        continue;
    }
    echo $nums[$i] . '<br>';
}
echo '</pre>';*/

/*$goods = [
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

//увеличиваем значение цены, если оно меньше 120

for ($i = 0; $i < 3; $i++){
    if ($goods[$i]['price'] < 120){
        $goods[$i]['price'] += 15;
    }
    echo '<pre>';
    print_r ($goods[$i]);
    echo '</pre>';
}

foreach ($goods as &$good){
    if ($good['price'] < 120) {
        $good['price'] += 15;
    }
    echo '<pre>';
    print_r ($good);
    echo '</pre>';

unset($good);
}*/
