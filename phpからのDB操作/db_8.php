<?php
//課題10:profileIDで指定したレコードを削除できるフォームを作成してください

try{//アクセス
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}
//profilesの情報を取得
$catch = "select * from profiles;";
$sql = $catch;
$query = $pdo -> prepare($sql);

$query -> execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);
var_dump($result);

foreach($result as $value ){
   foreach($value as $key ){//キーの０番目（profilesIDを取得）
     echo $key[0];
   }
 }

 $pdo = null;
 ?>
