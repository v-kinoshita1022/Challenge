<?php
//課題10:profileIDで指定したレコードを削除できるフォームを作成してください

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
//var_dump($result);

$id = $_POST["id"];//入力をうける
//profilesidの連想配列を作る
foreach ($result as $key => $value) {
  //配列の中に入力されたidと同じものがあれば$aに代入
  if($value[profilesid] === $id){
    $a = $id;
  }
}
//var_dump($a);
//idの削除を実行する
if($a == true){
  $delete = "delete from profiles where profilesid = '$a';";
  $sql = $delete;
  $query = $pdo -> prepare($sql);

  $query -> execute();
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $pdo = null;
  echo '該当情報を削除しました'
}else{
  echo '該当する情報がありません';
}


 ?>
