
<?php
//課題9:フォームからデータを挿入できる処理を構築してください。

try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}

//入力情報を受取る
$id = $_POST["id"];
$name = $_POST["name"];
$tell = $_POST["tell"];
$age = $_POST["age"];
$birthday = $_POST["birthday"];
 var_dump($id);
//入力情報が全て入っているなら
if (!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["tell"]) && !empty($_POST["age"]) && !empty($_POST["birthday"])) {

//tableに書き込み
   $input = "insert into profiles values(:id, :name, :tell, :age, :birthday);";
   $sql = $input;
   $query = $pdo -> prepare($sql);

   $query -> bindValue(':id',$id);
   $query -> bindValue(':name',$name);
   $query -> bindValue(':tell',$tell);
   $query -> bindValue(':age',$age);
   $query -> bindValue(':birthday',$birthday);


   $query -> execute();
   $result = $query->fetchall(PDO::FETCH_ASSOC);//検索結果

   $pdo = null;
   echo "入力が完了しました";

}else{//入力情報が足りていない
  echo "全ての項目を入力して下さい";
}

 ?>
