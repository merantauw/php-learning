<?php error_reporting (-1);

/*$x = '1';
if (isset($x)){
    echo $x . '<br>';
};

if (empty($x)){
  echo 'x is empty';
};*/

/*if (!empty($_POST['agree'])){
    info($_POST);
}*/

/*if (isset($_POST['send-form'])){
    echo 'Была отправлена первая форма';
}
if (isset($_GET['search-form'])){
    echo 'Была отправлена вторая форма';
}*/

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <p>Имя:<input type="text" name="name"></p>
    <p>Почта:<input type="email" name="email"></p>
    <p>Я согласен с политикой конфиденциальности<input type="checkbox" name="agree"></p>
    <p><button type="submit" name="send-form">Отправить</button></p>
</form>
<hr>

<?php

 if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['agree'])){
     echo '<p>Вы не заполнили все обязательные поля</p>';
 } else {
     echo '<p>Вы ввели имя: ' . $_POST['name'] . '.</p>';
     echo '<p>Ваша почта: ' . $_POST['email'] . '.</p>';
     echo '<p>Вы согласились с политикой конфиденциальности</p>';
 }


?>

</body>
</html>