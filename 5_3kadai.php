




<?php
//　３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
//入力されたidを取得
$id = $_POST["id"];
echo "id:".$_POST["id"]."<br>";
//入力されたpassを取得
$pass = $_POST["pass"];
echo "pass:".$_POST["pass"]."<br>";
//アクセスした時間を取得
$access_time = date('Y年m月d日h時i分s秒');
    setcookie('LastLoginDate', $access_time);

    //$lastDate = $_COOKIE['LastLoginDate'];
    session_start();
      $_SECCION['LastLoginDate']=$access_time ;
       echo "お帰りなさい！".$id."さん！<br>";
       echo "前回ログイン日は、" . $access_time  . "です！";

 ?>
