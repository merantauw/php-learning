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
/*function sum(int ...$nums): ?int
{
    if (!empty($nums)) {
        $res = 0;
        foreach ($nums as $num) {
            $res += $num;
        }
        return $res;
    }

    return null;
}

$result = sum(15, 25, 16, 28);
var_dump($result);

$result = sum();
var_dump($result); */

//мы можем комбинировать именованные и позиционные аргументы через знак : , однако имена аргументов нужно писать без знака $
/*function sum(float $a, float $b = 1, float $factor = 3): ?float
{
    return ($a + $b) * $factor;
}

echo sum(3);

echo '<br>';
var_dump(sum(1, factor: 4.3, b: 3,));*/

/* задача: написать функцию, принимающую параметром массив, которая будет возвращать количество элементов
этого массива
 */

$array = [1,2,3,4,5,6,7,8,9,10];

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

function get_count(array $arr): ?int
{
    $result = 0;
    if ($arr){
        foreach ($arr as $item){
            $result++;
        }
        return $result;
    }
    return null;
}

echo get_count($array);

function table_create(int $tr, int $td){
    $ctr = 1;
    $ctd = 1;
    echo '<table border="1" width="100%">';
        while ($ctr < $tr) {
            echo '<tr>';
            while ($ctd < $td){
                echo '<td>' . $tr * $td . '</td>';
                $td++;
            }
            echo '</tr>';
            $tr++;
        }
    echo '</table>';
}

echo table_create(2,3);



