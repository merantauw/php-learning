<?php

error_reporting(-1);
session_start();

if (isset($_GET['do']) && $_GET['do'] == 'logout'){
    unset($_SESSION['auth']);
    header('location: index.php');
    die;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul style="display: flex; gap: 50px; font-size: 24px;">
    <li><a href="index.php">Index Page</a></li>
</ul>
<?php if(!empty($_SESSION['auth'])): ?>
<h1>Эту страницу может видеть только авторизованный пользователь</h1>
    <?php if (isset($_SESSION['res'])){
        echo $_SESSION['res'];
        unset($_SESSION['res']);
    } ?>
<a href="?do=logout" style="display: block; width: 200px; text-align:center;font-size: 20px;border: 1px solid #000;">Logout</a>
<?php else: ?>
    <h1>Вы не авторизованы</h1>
<?php endif ?>


</body>
</html>
