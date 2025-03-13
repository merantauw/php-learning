<?php

/*function hello($name = 'Guest'){
    echo '<p> Hello, ' . $name . '</p>';
}

hello('Vlad');

function sum($a = 1, $b, $c = 2){
    echo ($a + $b) * $c;
}

sum(1,2,3);*/

$value = 20;

/*function increaseValue($value){
    $value += 10;
}

var_dump($value);
increaseValue($value);
var_dump($value);

значение после отработки функции не изменится, так как переменная $value находится в локальной области видимости функции*/

/*function increaseValue(&$value){
//    global $value;  если передать ссылочный параметр при создании функции, то function increaseValue(&$value) будет сродни записи global $value;
    $value += 10;
}

var_dump($value);
increaseValue($value);
var_dump($value);

unset($value);*/

//Оператор ... (оператор распаковки, splat-оператор) используется для обозначения переменного числа аргументов функции.
/*function sum(...$nums){
    $res = 0;
    foreach ($nums as $num){
        $res += $num;
    }
    echo $res;
}

sum(1,2,3,4,5);*/

//использование ключевого слова static позволяет делать прирост значения переменной $a на единицу с каждым вызовом функции.
//в результате мы будем видеть на экране 012 вместо 000, то есть значение $a будет сохраняться.
/*function test(){
    static $a = 0;
    echo $a;
    $a++;
}

test();
test();
test();*/
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

/*$array = [1,2,3,4,5,6,7,8,9,10];

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

echo get_count($array);*/

function get_table(int $tr, int $td){
    if ($tr > 0 || $td > 0){
        echo '<table border="1" width="100%">';
        $irow = 1;
        while ($irow <= $tr) {
            echo '<tr>';
            $icell = 1;
            while ($icell <= $td) {
                echo '<td>' . $tr . ' * ' . $td . ' = ' . $tr * $td . '</td>';
                $icell++;
            }
            echo '</tr>';
            $irow++;
        }
        echo '</table>';
    } else{echo 'Одно из значений отрицательное либо равно 0. Замените';}

}

get_table(12,7);