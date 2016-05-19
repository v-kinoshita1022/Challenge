
<?php

//課題1:Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());
}

//課題2:前回の課題1で作成したテーブルに自由なメンバー情報を格納する処理を構築してください
//$sql ="insert into profoles values(3,'折笠','030-3456-5678',33,'1990-09-14')"

//課題3:前回の課題1で作成したテーブルからSELECT*により全件取得し、画面に取得した全情報を表示してください
$sql = "select * from profiles;";

$query = $pdo -> prepare($sql);

$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);
//var_dump($result);

//課題4:前回の課題1で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください
$a=$result[0];

while(list($Key,$Value)=each($a)){
	echo $Key.' => '.$Value."<br>";
}

 ?>
