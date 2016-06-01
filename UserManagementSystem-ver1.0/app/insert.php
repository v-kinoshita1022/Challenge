<!--入力画面-->

<?php require_once '../common/defineUtil.php';
      require_once '../common/scriptUtil.php';//課題１
      //課題４　セッションに格納されているなら取得
      session_start();
      $post_name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
      $post_birthday = isset($_SESSION['birthday']) ? $_SESSION['birthday'] : '';
      $post_type = isset($_SESSION['type']) ? $_SESSION['type'] : '';
      $post_tell = isset($_SESSION['tell']) ? $_SESSION['tell'] : '';
      $post_comment = isset($_SESSION['comment']) ? $_SESSION['comment'] : '';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
  <!--セッションから取得した情報を入力する分岐-->
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" value="<?php echo $post_name; ?>">
    <br><br>

    生年月日:
    <select name="year">
        <option value="----">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>
    </select>年
    <select name="month">
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>
    </select>月
    <select name="day">
        <option value="--">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <input type="radio" name="type" value="エンジニア"
     <?php if ($post_type == "エンジニア"){echo 'checked';} ?>>エンジニア<br>
    <input type="radio" name="type" value="営業"
     <?php if ($post_type == "営業"){echo 'checked';} ?>>営業<br>
    <input type="radio" name="type" value="その他"
     <?php if ($post_type == "その他"){echo 'checked';} ?>>その他<br>
    <br>

    電話番号:
    <input type="text" name="tell" value="<?php echo $post_tell;?>" >
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php echo $post_comment;?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
    <!--課題１ トップに戻るリンク-->
    <?php echo return_top(); ?>

</body>
</html>
