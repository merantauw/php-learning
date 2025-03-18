<?php

error_reporting(-1);

//echo '<pre>';
//print_r($_COOKIE);
//echo '<pre>';
/*
setcookie('test1', 'TEST 1', path: '/');
//setcookie('test2', 'TEST 2', ['path' => '/', 'expires' => time()+10]);
setcookie('test3', 'TEST 3', path: '/', expires_or_options: time()+3600);

setcookie('test1', '', path: '/');
setcookie('test3', '', ['path' => '/', 'expires' => time()-3600]);*/

if (isset($_GET['do']) && $_GET['do'] === 'reset') {
    setcookie('count', '', time() - 3600, '/');
    header('Location: index.php');
    exit;
}


isset($_COOKIE['count']) ? setcookie('count', ++$_COOKIE['count'], time() + 3600, '/') : setcookie('count', 1, time() + 3600, '/');

echo 'Вы посещали страницу ' . ($_COOKIE['count'] ?? 1) . ' раз';

echo '<p><a href="?do=reset">Сбросить счетчик</a></p>';