<?php error_reporting(-1);

$str = ' Hello, World! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('Hello &gt;' + \" world\")</script>";
$str4 = "Привет \nВо первых строках своего письма...";

//echo mb_strlen($str); надо включить расширение мультибайтовых строк в настройках php

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*$data = explode(',', $str2);
debug($data);

echo implode(',', $data);

echo htmlspecialchars($str3, double_encode: false);*/

//echo nl2br($str4);
//
//debug(str_split($str, 2));

function str_count(string $str, string $substr): ?int {
    $result = substr_count($str, $substr);
    return $result;
}

//echo str_count('да, я в туалете', 'е');

function no_space(string $str): ?string{
    return trim($str);
}

//echo no_space('   яапавы ывыапв  вы   ыцй   ');

function max_number(int $num): int{
        $digits = str_split($num);
        arsort($digits);
        return (int)implode('',$digits);
}

echo max_number(5159);