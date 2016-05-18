<?php
//５．ファイルアップロード機能を作成してください。
var_dump($_FILES)."<br>";
//move_uploaded_file($_FILES['userfile']['tmp_name'],'test.txt');
$file_name='test';
move_uploaded_file( $_FILES['userfile']['tmp_name'], $file_name);

//ファイルの読み込み
$fp = fopen($file_name, 'r');
    $file_txt = fgets($fp);
    echo $file_txt;
    fclose($fp);
 ?>
