<?php

/*１．DBに人の情報を入れたテーブルを作成してください。
　２．DBに駅の情報を入れたテーブルを作成してください。
　３．baseという抽象クラスを作成し、以下を実装してください。
　　・loadというprotectedな関数を用意してください。
　　・showという公開関数を用意してください。
　４．３で作成した抽象クラスを継承して、以下のクラスを作成してください。
　　・人の情報を扱うHumanクラス
　　・駅の情報を扱うStationクラス
　　また、各クラスに隠匿変数でtableという変数を用意し、各クラスの初期化処理で
　　table変数にテーブル名を設定してください。
　５．load関数でDBから全情報を取得するように各クラスの関数を実装してください。
　　その際、table変数を利用して、データを取得するようにしてください。
　６．show関数で各テーブルの情報の一覧が表示されるようにしてください。
*/

class base{
  abstract protected function load();

  public function show(){
    foreach($result as$value){
      foreach ($value as $key => $record) {
        echo $key.'=>'.$record.'<br>';
      }
    }
  }
}

//クラス人間
class Human extends base{
  private $hTable = 'name';

  function __construct($hTable) {
      $this->name = $hTable;
  }

  function __destruct() {
      $this->name = '';
  }

 function load(){
   try{//アクセス
   $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','root','root');
   $pdo->setAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   }catch(PDOException $Exception){
     die('接続に失敗しました:'.$Exception->getMessage());
   }

   //profilesの情報を取得
   $catch = "select * from :human;";
   $sql = $catch;
   $query = $pdo -> prepare($sql);
   $query = bindValue(':human', $human)
   $query -> execute();
   $result = $query->fetchall(PDO::FETCH_ASSOC);
 }
}




//クラス駅

class Station extends base{
  private $sTable = 'name';

  function __construct($sTable) {
      $this->name = $sTable;
  }

  function __destruct() {
      $this->name = '';
  }

  function load(){
    try{//アクセス
    $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE.PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }catch(PDOException $Exception){
      die('接続に失敗しました:'.$Exception->getMessage());
    }

    //profilesの情報を取得
    $catch = "select * from :station;";
    $sql = $catch;
    $query = $pdo -> prepare($sql);
    $query = bindValue(':station', $station);
    $query -> execute();
    $result = $query->fetchall(PDO::FETCH_ASSOC);
  }
}

$human = new Human();
$station = new Station();

 ?>
