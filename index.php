<?php error_reporting (-1);

if (!(empty($_FILES))){
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name'])){
        echo 'Success';
    } else {
        echo 'Error';
    }
}

//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['SERVER_NAME'];
//echo '<p>' . $_SERVER['QUERY_STRING'] . '</p>';
/*if (!empty($_SERVER['HTTP_REFERER'])){
    echo $_SERVER['HTTP_REFERER'];
}*/
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

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="Submit" value="send">Отправить</button>
</form>

</body>
</html>