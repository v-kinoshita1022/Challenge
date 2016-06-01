<?php require_once '../common/defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    if(!empty($_POST['name']) && !empty($_POST['year']) && !empty($_POST['type'])
            && !empty($_POST['tell']) && !empty($_POST['comment'])){

        $post_name = $_POST['name'];

        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        //課題２生年月日の入力が完全でなければnullにする。フォーマットしてから分岐
        if($_POST['year']=='----' || $_POST['month']=='00' || $_POST['day']=='00'){
          $post_birthday = null;
        }

        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];
        //var_dump($post_birthday);

        //セッション情報に格納
        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;
    ?>

        <h1>登録確認画面</h1><br>
        <p>名前:<?php echo $post_name;?><br>
        生年月日:<?php if(empty($post_birthday)){
                             echo '未入力';
                           }else{
                             echo $post_birthday;
                           }?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br></p>


        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="submit" name="yes" value="はい">
          <input type="hidden" name="hidden" value="HIDDEN">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください<br>

        <!--課題３入力ミスの項目を表示する-->
        <p><?php
          if(empty($post_name)){
          echo '※名前は必須項目です<br>';
        }
        if (empty($post_type)) {
          echo '※種別は必須項目です<br>';
        }
        if (empty($post_tell)) {
          echo '※電話番号は必須項目です<br>';
        }
        if (empty($post_comment)) {
          echo '※コメントは必須項目です<br>';
        }
        ?></p>
        <br><br>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
</body>
</html>
