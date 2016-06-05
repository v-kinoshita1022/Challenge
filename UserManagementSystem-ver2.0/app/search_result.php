<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>検索結果画面</title>
</head>
    <body>
        <h1>検索結果</h1>
        <table border=1>
            <tr>
                <th>名前</th>
                <th>生年</th>
                <th>種別</th>
                <th>登録日時</th>
            </tr>
        <?php

        $name = isset($_GET['name']) ? $_GET['name'] : null;
        $year = isset($_GET['year']) ? $_GET['year'] : null;
        $type = isset($_GET['type']) ? $_GET['type'] : null;
var_dump($name);  var_dump($year);var_dump($type);
        $result = null;
        if(!empty($name) && !empty($year) && !empty($type)){
            $result = serch_all_profiles();
        }else{
          //$type = !empty($type)?$type:null;
            $result = serch_profiles($name,$year,$type);
        }
        foreach($result as $value){
          var_dump($result);
        ?>
            <tr>
                <td><a href="<?php echo RESULT_DETAIL ?>?id=<?php echo $value['userID']?>"><?php echo $value['name']; ?></a></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><?php echo ex_typenum($value['type']); ?></td>
                <td><?php echo date('Y年n月j日　G時i分s秒', strtotime($value['newDate']));; ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
</body>
</html>
