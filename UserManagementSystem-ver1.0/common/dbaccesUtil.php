<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','kinoshita','freedom1022');
        return $pdo;
    } catch (PDOException $e) {
        ERROR_PROCEDURE()
        die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}

//課題７DBアクセス系の処理をここに切り離す
function insert(){
 global $insert_db;
  //DBに全項目のある1レコードを登録するSQL
$insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
        . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

//クエリとして用意
$insert_query = $insert_db->prepare($insert_sql);

//グローバルで無く引数で良かったとの話も。。。
 global $name;
 global $birthday;
 global $tell;
 global $type;
 global $comment;
 global $newDate;
//SQL文にセッションから受け取った値＆現在時をバインド
$insert_query->bindValue(':name',$name);
$insert_query->bindValue(':birthday',$birthday);
$insert_query->bindValue(':tell',$tell);
$insert_query->bindValue(':type',$type);
$insert_query->bindValue(':comment',$comment);
//課題６　sqlの実行時間を格納
$newDate = date("Y-m-d H:i:s");
$insert_query->bindValue(':newDate',$newDate);

//SQLを実行
$insert_query->execute();



}
