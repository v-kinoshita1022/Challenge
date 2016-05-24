
<?php
/*
課題7:profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
課題8:検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください
課題9:フォームからデータを挿入できる処理を構築してください。
*/

try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());
}

//課題6:課題2でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください
$sql = "delete from profiles where profilesID = '3';";

$query = $pdo -> prepare($sql);

$query -> execute();

$sql = "SELECT * from profiles;";

$result = $query->fetchall(PDO::FETCH_ASSOC);

$query = $pdo -> prepare($sql);

$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);


var_dump($result);


 ?>
