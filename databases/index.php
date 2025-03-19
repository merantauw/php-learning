<?php

error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect('localhost', 'root', '', 'world');

$res = mysqli_query($db, "SELECT Code, Name FROM country LIMIT 10");
//var_dump($res);

//debug(mysqli_fetch_all($res, MYSQLI_ASSOC));

/*debug(mysqli_fetch_assoc($res));
while ($row = mysqli_fetch_assoc($res)){
    echo 'Код страны: ' . $row['Code'] . '/ Страна: ' . $row['Name'] . '<br>';
}*/

//$name = mysqli_escape_string($db, $name);
//var_dump(mysqli_query($db, "INSERT INTO test (name) VALUES('$name')"));
$name = "d'Artanian";
$name2 = "Сегелёв";
$age = 25;
$age2 = 31;

$query = sprintf("UPDATE test SET name = '%s', age = %d WHERE id = 3",
    mysqli_real_escape_string($db, $name2),
    (int)$age2);

var_dump(mysqli_query($db, $query));