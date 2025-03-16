<?php

error_reporting(-1);
session_start();

$login = 'admin';
$password = '123';

if (!empty($_POST)){
    if ($_POST['login'] == $login && $_POST['password'] == $password){
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'success';
        header('Location: secret.php');
        die();
    } else {
        $_SESSION['res'] = 'error';
        header('Location: index.php');
        exit;
    }
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
    <li><a href="secret.php">Secret Page</a></li>
</ul>

<h1>Эту страницу может видеть любой пользователь</h1>

<?php if (isset($_SESSION['res'])){
    echo $_SESSION['res'];
    unset($_SESSION['res']);
} ?>

<form method="post">
    Логин: <input type="text" name="login">
    Пароль: <input type="password" name="password">
    <button type="submit">Авторизоваться</button>
</form>

</body>
</html>
