<!--．以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述してください。
　　　・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス）
　２．以下の機能を実装してください。
　　　１で作成したHTMLの入力データを取得し、画面に表示する
　３．クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
　４．３と同じ機能をセッションで作成してください。
　５．ファイルアップロード機能を作成してください。
　６．５で作成したプログラムに、ファイルの中身を読み込んで表示する機能を追加してください。
-->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<html>
  <head>
    <title>コントロールサンプル</title>
  </head>
  <body>
    <form action="sample.php" method="post">
      名前<input type="text" name="textName">
      <input type="radio" name="sex" value="man" checked="checked">男
      <input type="radio" name="sex" value="woman">女
      趣味<textarea name="hobby"></textarea>
      <input type="submit" name="btnSubmit">

    </form>
  </body>
</html>

<?php

 ?>
