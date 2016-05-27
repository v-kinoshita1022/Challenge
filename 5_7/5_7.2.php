<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$hoby = $_POST['hoby'];
session_start();
$_SESSION['name'] = $name;
$_SESSION['sex'] = $sex;
$_SESSION['hoby'] = $hoby;
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>課題5-7(確認ページ)</title>
</head>
<body>
    <h1>投稿ページ</h1>
    <h3>送信内容を確認してください。</h3>
    <p><?php echo '名前:'.$name; ?></p>
    <p><?php echo '性別:'.$sex; ?></p>
    <p><?php echo '趣味:'.$hoby; ?></p>


    <form action="" method="post"><!--おまけ-->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="sex" value="<?php echo $sex; ?>">
        <input type="hidden" name="hoby" value="<?php echo $hoby; ?>">
        <input type="submit" value="上記の内容で送信">
    </form>
    <a href="5_7.1.php">戻る</a>
    <form action="" method="post"><!--おまけ-->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="sex" value="<?php echo $sex; ?>">
        <input type="hidden" name="hoby" value="<?php echo $hoby; ?>">
        <input type="submit" value="上記の内容で送信">
    </form>
    
</body>
</html>
