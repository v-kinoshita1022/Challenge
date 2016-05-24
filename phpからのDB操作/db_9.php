<?php

//profileIDで指定したレコードの、profileID以外の要素をすべて上書きできるフォームを作成してください

try{//アクセス
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}
//profilesの情報を取得
$catch = "select profilesid from profiles;";
$sql = $catch;
$query = $pdo -> prepare($sql);

$query -> execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);
var_dump($result);

$id = $_POST["id"];//入力をうける
foreach ($result as $key => $value) {
  if($value[profilesid] === $id){
    $a = $id;
  }
}
var_dump($a);

$name = $_POST["name"];//入力をうける
$tell = $_POST["tell"];//入力をうける
$age = $_POST["age"];//入力をうける
$birthday = $_POST["birthday"];//入力をうける


if($a == true){
  $update = "update profiles set name = '$name', tell = '$tell', age = '$age', birthday = '$birthday' where profilesid = '$a';";
  $sql = $update;
  $query = $pdo -> prepare($sql);

  $query -> execute();
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $pdo = null;
  echo '該当する情報を更新しました';
}else{
  echo '該当する情報がありません';
}


 ?>
