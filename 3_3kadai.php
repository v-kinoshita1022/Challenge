<?php
/*課題7:引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。この関数を20回呼びだす
課題8:課題1、課題2のユーザー定義箇所を含んだutil.phpを作成し、requireで呼び出して表示する
課題9:3人分のプロフィールについてIDと住所以外を表示する処理を実行する。2重のforeachとcontinueを必ず用いること
課題10:課題9の処理のうち2人目までforeachのループを抜けるようにする
*/

//課題７
$i=3;
function memory(){
  global $i;
  static $a = 1;
  echo "回数:".$a++." ";
  echo $i = $i*2;;
}

for($a=1;$a<=20;$a++){
echo memory()."<br>";
}

//課題８
require "util.php";

my_profile();

//課題９
//プロフィール１
$user1 = array("id"=>"123",
             "name"=>"niku",
             "birth"=>"2016/5/9",
             "add"=>"東京");
//プロフィール２
$user2 = array("id"=>"456",
             "name"=>"sakana",
             "birth"=>"2016/1/1",
             "add"=>"名古屋");
//プロフィール３
$user3 = array("id"=>"789",
             "name"=>"yasai",
             "birth"=>"2016/4/1",
             "add"=>"広島");

 $all = array($user1, $user2, $user3);

foreach ($all as $value){
      foreach ($value as $key2 => $value2) {

         if($key2 == "name"){
           echo "$key2:$value2"."<br>";
         }elseif($key2 == "birth"){
           echo "$key2:$value2"."<br>";
         }else {
           continue;
         }

          /*if($key2 == "id" || $key2 == "add"){
            continue;
          }
          echo "$key2:$value2"."<br>";
*/
    }
}

//課題１０
//プロフィール１
$user1 = array("id"=>"123",
             "name"=>"niku",
             "birth"=>"2016/5/9",
             "add"=>"東");
//プロフィール２
$user2 = array("id"=>"456",
             "name"=>"sakana",
             "birth"=>"2016/1/1",
             "add"=>"名古屋");
//プロフィール３
$user3 = array("id"=>"789",
             "name"=>"yasai",
             "birth"=>"2016/4/1",
             "add"=>"広島");

 $all = array($user1, $user2, $user3);

foreach ($all as $value){
      foreach ($value as $key2 => $value2) {

           if($key2 == "id" || $key2 == "add" || $value == $user3){
            continue;
          }
          echo "$key2:$value2"."<br>";
        }
     }
?>
