<?php

/*１０．クエリストリングを利用して、以下の処理を実現してください。

　簡易素因数分解のロジックを作成します。

　クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
　元の値と素因数分解の結果を表示するようにしてください。
　
　2ケタ以上の素数が含まれた数値の場合は、
　「元の値　1ケタの素因数　その他」と表記して、その他　に含んでください。
$number = $_GET['number'];
*/
/*$i = 2;

do {
    $remainder = $number % $i;

    if ($remainder === 0) {
        $answer[$i]++;
        $number /= $i;
        $i = 2;
    } else {
        $i++;
      }

} while ($number !== 1);

foreach ($answer as $key => $val) {
$view[] = sprintf('%d^%d', $key, $val);
}

echo implode(' * ', $view);
*/
$int = $_GET['int'];   // 処理数値指定（正の整数）
$i = 2;
if($int <= 0 || is_float($int)){   // 指定数値を限定
    echo "正の整数を指定してください。";
} else {
    ## 素因数分解処理開始
    echo "元の値は:".$int."です。"." "; //元の値を表示
    echo "１ケタの素因数:";
    while($int >= 1){
      if(($int % $i) == 0 && mb_strlen($i) === 1){
        //元の値／素数の余りが０　かつ　素数が１桁（１文字）
            echo $i." ";
            $int = $int / $i;
        }else {
            $i++;
        }
        if($int <= $i){
          //カウントアップ（等）により素数が元の値以上になる
            if($int == 1){ echo "1 ";
              //元の値がそもそも１だった時
            }elseif($int == $i){ echo $i." ";}
            //最後の素数
            break;
        }
        if (mb_strlen($i) == 2){     //2ケタの素因数を表示
            $i = " ";
            echo "その他";
           exit;}
       }

}
 ?>
