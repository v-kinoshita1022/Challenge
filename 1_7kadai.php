<?php
/*７．クエリストリングを利用して、以下の処理を実現してください。
　スーパーのレジでレシートを作る仕組みを作成します。
　クエリストリングで総額・個数・商品種別を受け取って処理します。

　①商品種別は、３つ。１：雑貨、２：生鮮食品、３：その他
　　まずは、この商品種別を表示してください。

　②総額と個数から１個当たりの値段を算出してください。
　　総額と１個当たりの値段を表示してください。

　③3000円以上購入で4%、5000円以上購入で5%のポイントが付きます。
　　購入額に応じたポイントの表示を行ってください。
*/

//①商品種別＝$taype
/*$type = $_GET['type'];
if($type == 1){
  echo '商品種別は”雑貨”です。<br>';
}
/if($type == 2){
  echo '商品種別は”生鮮食品”です。<br>';
}
if ($type == 3) {
  echo '商品種別は”その他”です。<br>';
}*/
$type = $_GET['type'];
switch($type) {
        case 1:
            $message = '商品種別は”雑貨”です。<br>';
            break;
        case 2:
            $message = '商品種別は”生鮮食品”です。<br>';
            break;
        case 3:
            $message = '商品種別は”その他”です。<br>';
            break;
        default:
            $message = '想定外の値です。';
            break;
}
echo $message;

//②
//総額＝total
$total = $_GET['total'];
//個数＝count
$count = $_GET['count'];
  echo '総額は'.$total.'円です。<br>';
  echo '1個当たりの値段は'.$total/$count.'円です。<br>';

//③
if(3000<=$total){
  echo 'ポイントは'.$total*0.04.'ポイントです。<br>';
}elseif(5000<=$total){
  echo 'ポイントは'.$total*0.05.'ポイントです。<br>';
}

?>
