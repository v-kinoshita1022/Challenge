<?php
/*課題1:自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示するユーザー定義関数を作り、関数を10回呼び出して下さい
課題2:引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください
課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
　例）function sample($□□□, $△△△, $type) // 引数が３つの関数書き出し部分(デフォルト値なし)
*/
//課題１
function my_profile(){
     echo "木下優大<br>";
     echo "1989年7月13日生<br>";
     echo "スマホアプリを作れるようにしたい<br>";
}
for($i=0;$i<10;$i++){
    my_profile();
}

//課題２
$a=7;
function decision($a){
  if($a%2==0){
    echo "偶数<br>";
  }elseif($a%2==1){
    echo "奇数<br>";
  }
}
     decision($a);

//課題３
function multiple($i=3,$num=5,$type=false){
   if($type==false){
     echo $i*$num;
   }elseif($type==true){
     $b = pow($i*$num,2);
     echo $b;
   }
}
   multiple($i=3,$num=5,$type=false);

 ?>
