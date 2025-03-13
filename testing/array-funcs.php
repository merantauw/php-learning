<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


$nums = [1.17,2,3.41,1,4,5.2,3,2,6,7.72,7,8,8,9,2,5];

$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10'
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7'
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15'
    ],
];

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year' => 2021,
    'speed' => 220,
    'wheels' => 4,
];

//echo count($goods);

//debug(array_count_values($nums));

/*foreach ($goods as $good):
    if (array_key_exists('price', $good)):
        echo '<p>такая цена встречается в массиве</p>';
    endif;

endforeach;*/


//var_dump(array_key_exists('year', $car));

//var_dump(in_array(2021, $car));

//debug(array_keys($car));

//debug(array_values($car));

//debug(array_unique($nums));

//function odd($var){
// return $var % 2;
//}

//function even($var){
//    return !($var % 2);
//}

//debug(array_filter($nums, 'even'));

//debug(array_filter($nums, function($var){
//    return !($var % 2);
//}));

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}
function user_count($arr){
    $cnt = 0;
    foreach ($arr as $item) {
        $cnt += 1;
    }
    return $cnt;
}

function sum_array(array $arr): int|float {
    $result = 0;
    foreach ($arr as $item):
        $result += $item;
    endforeach;
    return $result;
};

//echo '<p>' . user_count($nums) . '</p>';
//echo '<p>Сумма элементов массива = ' . array_sum($nums) . '</p>';
echo '<p>Сумма элементов массива произвольной функцией = ' . sum_array($nums) . '</p>';


function array_create(int $length): array{
    $i = 1;
    $res = [];
    while ($i < $length){
        $res[]= $i;
        $i++;
    }
    return $res;
};


dd(array_create(37));

//dd(range(1, 100, 1));