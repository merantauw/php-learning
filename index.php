<?php error_reporting (-1); ?>

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
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cupiditate id mollitia neque velit?
    Ad consectetur cumque dolorum eius et fugit harum impedit, incidunt quasi ratione rerum sint, sunt, ullam?
</p>

<?php $nums = [1,2,3,4,5]; ?>

<?php foreach($nums as $num): ?>
<?php echo '<p>' . $num . '</p>'; ?>
<?php endforeach; ?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam, amet aspernatur deserunt eaque esse facere ipsa magnam modi nulla numquam omnis optio porro quisquam quos sint tempore voluptas!
</p>


</body>
</html>