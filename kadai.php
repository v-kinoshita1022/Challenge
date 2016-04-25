<?php
//課題１，２
/*echo "入力された文字は:"."こんにちは";
// aaaa

//課題３
$input = fgets(STDIN);
if($input => 5){
  echo "true";
}else{
  echo "false";
}

//課題４
$input = fgets(STDIN);
if($input == $password){
  echo "ログイン成功";
}*/

//課題５
/*$i = 1;
for($i=1;$i<=9;$i++){
  if($i%2 == 1){
    echo $i;
  }
}
*/
//課題６
$i = 1;
for($i=1; $i<=3; $i++){
  echo "Hello World!";
}

//課題７
$input = fgets(STDIN);
while($input){
  if($input == $password){
    echo "ログインしました";
  }
}

//課題８
if($i=>1){
  echo "入力された数字は１以上です";
}elseif($i == 0){
  echo "入力された筋は０です";
}else{
  echo "入力された数字は０未満です";
}

//課題９
$i =1;
if($input=="top"){
for($i=1; $i<=20; $i++){
  echo "記事No.".$i."を表示\n";
  }
}else{
  echo "Log:このページはTOPページではありません";
}
?>
