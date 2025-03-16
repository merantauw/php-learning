<?php error_reporting (-1);

session_start();

//$_SESSION['test'] = 123;

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

//echo 'Вы посещали эту страницу ' . $_SESSION['count'] . ' раз';

var_dump($_SESSION);

unset($_SESSION['count'], $_SESSION['test']);
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <title>Document</title>
</head>
<body>

<a href="index2.php">index 2</a>

</body>
</html>