<?php require_once '../common/scriptUtil.php';
      require_once '../common/dbaccesUtil.php';
session_start();

//課題５直リンク禁止　hiddenがnullならエラー
$hidden = isset($_POST["hidden"])?$_POST["hidden"]:"";
//var_dump($hidden);
 if(empty($hidden)){
   echo '<h1>入力からやり直してください<br></h1>';
   echo return_insert();

   exit;
 }

?>
<!--登録結果-->



<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    echo "ssssss";
    $name = $_SESSION['name'];
    $birthday = $_SESSION['birthday'];
    $type = $_SESSION['type'];
    $tell = $_SESSION['tell'];
    $comment = $_SESSION['comment'];


    //db接続を確立
    $insert_db = connect2MySQL();

    insert();

    //接続オブジェクトを初期化することでDB接続を切断
    $insert_db=null;
    ?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php
    if(!empty($birthday)){
       echo $birthday;
     }elseif($birthday == null){
       echo '未入力です';
     }?><br>
    種別:<?php echo $type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <?php echo return_top(); ?>

</body>

</html>
