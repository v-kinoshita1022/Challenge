<?php
session_start();
// var_dump($_SESSION);
$name = isset($_SESSION['name']) ? $_SESSION['name'] : "";
$sex = isset($_SESSION['sex']) ? $_SESSION['sex'] : "";
$hoby = isset($_SESSION['hoby']) ? $_SESSION['hoby'] : "";
/*if (isset($_SESSION['s_hoby'])) {
  $hoby = $_SESSION['s_hoby'];
}else{
  $hoby = "";
}*/
 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
     <meta charset="utf-8">
     <title>課題5−7(TOPページ)</title>
 </head>
 <body>
     <h1>入力ページ</h1>
     <p><font color="red">※の箇所は必ず入力してください。</font></p>
     <!--入力情報をおくる-->
     <form action="5_7.2.php" method="post">

          <font color="red">※<font color=#000000>名前:&nbsp;<input type="text" name="name" value="<?php echo $name ?>" required>
         </font><br><br>

         <font color="red">※<font color=#000000>性別:&nbsp;
         男性<input type="radio" name="sex" value="男性"
         <?php if($sex == '男性'){echo 'checked';}?> required>&nbsp;&nbsp;

         女性<input type="radio" name="sex" value="女性"
         <?php if($sex == '女性'){echo 'checked';}?> </font><br><br>

         趣味:&nbsp;<textarea name="hoby"><?php echo $hoby; ?></textarea><br><br>
         <input type="submit" value="送信">
     </form>
     <br>
     <br>
     <form action="5_7.1.php">
         <button type="submit" value="<?php session_unset(); ?>">入力を記憶しない</button>
     </form>
 </body>
 </html>
