<?php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

//var_dump(copy('file.txt', 'folder/file2.txt'));

/*if (file_exists(__DIR__ . '/folder/file2.txt')){
    echo 'OK';
} else {
    echo 'NO';
}*/

//echo file_get_contents(__DIR__ . '/folder/file2.txt');
//
//$file = file_get_contents('file.txt');
//var_dump(file_put_contents('file32.txt', $file, FILE_APPEND));

//debug(file('file.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));

//var_dump(rename('file3.txt', 'folder/file4.txt'));

/*var_dump(mkdir('test', 0755));
var_dump(mkdir('1/2/3', 0644, true));*/

//var_dump(rmdir('1/2/3'));

var_dump(@unlink(__DIR__ . '/folder/file4.txt'));
