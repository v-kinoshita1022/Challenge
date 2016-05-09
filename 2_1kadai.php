<?php
/*１．switch文を利用して、以下の処理を実現してください。
　　　　値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理
　２．switch文を利用して、以下の処理を実現してください。
　　　　値が'A'なら「英語」、値が'あ'なら「日本語」、それ以外は何も表示しない処理
　３．for文を利用して、8を20回掛ける処理を実現してください。
　４．for文を利用して、'A'を30個連結する処理を実現してください。
　５．for文を利用して、0から100を全部足す処理を実現してください。
　６．while文を利用して、以下の処理を実現してください。
　　　　1000を2で割り続け、100より小さくなったらループを抜ける処理
　７．以下の順番で、要素が格納された配列を作成してください。
　　　　10, 100, 'soeda', 'hayashi', -20, 118, 'END'
　８．７で作成した配列の'soeda'を33に変更してください。
　９．以下の順で、連想配列を作成してください。
　　　　1に'AAA', 'hello'に'world', 'soeda'に33, 20に20
*/
//①
$i=2;
switch($i){
  case 1:
   echo 'one<br>';
   break;
  case 2:
   echo 'two<br>';
  break;
}

$i=1;
switch($i){
  case 1:
   $answer = 'one<br>';
   break;
  case 2:
   $answer = 'two<br>';
  break;
}
 echo $answer;

//②
$i='A';
switch($i){
  case 'A':
   $lang = '英語<br>';
   break;
  case 'あ':
   $lang = '日本語<br>';
   break;
 }
  echo $lang;

//③
$i=1;
for($i=1;$i<=20;$i++){
   echo 8**$i.'<br>';
}

//④
$i=1;
for($i=1;$i<=30;$i++){
  echo 'A'.'.';
}

//⑤
$sum = 0;
for ($i = 1; $i <= 100; $i++)
    echo $sum += $i,'<br>';

//⑥
$num=1000;
while($num<=1000){
  echo $num/=2,'<br>';
  if($num<=100){
    break;
  }
}

///⑦
$array = array(10, 100, 'soeda', 'hayashi', -20, 118, 'END');

//⑧
$array[2] = 33;

//⑨
$arr = array(
     1 => 'AAA',
     'hello' => 'world',
     'soeda' => 33,
     20 => 20,
   );
   print_r($arr);
 ?>
