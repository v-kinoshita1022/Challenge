
<?php

/*課題8:検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、一つの.phpで完了できますので、チャレンジしてみてください
*/

try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}

//検索ワードを受け取る
$key = $_POST["key"];


//検索ワードが入っているなら検索
if (!empty($_POST["key"])) {

  $search ="select * from profiles where name like'%$key%';";
   $sql = $search;
   $query = $pdo -> prepare($sql);
   $query -> execute();
   $result = $query->fetchall(PDO::FETCH_ASSOC);//検索結果
   var_dump($result);

//$resultに検索ワードが含まれているなら
if(!empty($result)){
//検索結果の表示
  foreach($result as $value ){
     foreach($value as $key => $profiles ){
       echo $key. '=>' .$profiles.'<br>';
     }
  }
 }else{//検索ワードが見つからなかった場合
   echo "該当情報はありません";
 }
}else{
  echo "検索ワードを入力して下さい";
}
 ?>
