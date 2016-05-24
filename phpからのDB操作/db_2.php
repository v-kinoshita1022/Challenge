
<?php

try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
 	die('接続に失敗しました:'.$Exception->getMessage());
}

//課題5：nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください
$sql = "select * from profiles where name like'%茂%';";


$query = $pdo -> prepare($sql);

$query -> execute();

$result = $query->fetchall(PDO::FETCH_ASSOC);

//var_dump($result);

$a=$result[0];

while (list($key,$value) = each($a)) {
   echo $key.'=>'.$value."<br>";
}
 ?>
