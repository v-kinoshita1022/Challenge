<?php
/*課題4:課題1で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する
課題5:戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する
課題6:名前による検索プログラムを実装する。3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題5と同じ扱いに
*/
//課題４
function my_profile(){
     echo "木下優大<br>";
     echo "1989年7月13日生<br>";
     echo "スマホアプリを作れるようにしたい<br>";
     $judg="true";
     return $judg;
}
    $judg = my_profile();

if($judg=="true"){
  echo "この処理は正しく実行できました<br>";
}else{
  echo "正しくく実行できませんでした<br>";
}

/*function get_weather(){
$weather = "晴れ";
	return $weather;
}
$tenki = get_weather();
echo "今日の天気は".$tenki."です";
*/


//課題５
function profile(){
  $id=123;
  $name="tama";
  $birth="2016/5/9";
  $add="東京";
  return array($id,$name,$birth,$add);
}
$profile = profile();
  foreach ($profile as $value) {
    echo "$value<br>";
  }



//課題６
function search($namae){

  $user1 = array("id"=>"123",
               "name"=>"niku",
               "birth"=>"2016/5/9",
               "add"=>"東京");

  $user2 = array("id2"=>"456",
               "name2"=>"sakana",
               "birth2"=>"2016/1/1",
               "add2"=>"名古屋");

  $user3 = array("id3"=>"789",
               "name3"=>"yasai",
               "birth3"=>"2016/4/1",
               "add3"=>"広島");

  extract($user1);
  extract($user2);
  extract($user3);

 global $key;
 if(strstr($name,$key)){
   //nameに検索ワードが含まれるなら
  return array($id,$name,$birth,$add);
}elseif(strstr($name2,$key)){
  //name2に検索ワードが含まれるなら
  return array($id2,$name2,$birth,$add2);
}elseif(strstr($name3,$key)){
  //name3に検索ワードが含まれるなら
  return array($id3,$name3,$birth3,$add3);
}
}

$key = "y";//ここに検索ワードを入れる
$search = search($key);//検索ワードが仮引数に代入される
     foreach ($search as $value) {
       echo "$value<br>";
}
 ?>
