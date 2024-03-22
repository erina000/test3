<?php
//【15.ループ処理（foreach文）の応用】
// foreach文では、連想配列を使用し、各keyに名前を付ける事も可能
//[用語]value：配列データの値,array：現在処理している配列

//foreach文（連想配列）の使い方
//連想配列でkeyに名前を付ける。
//【A】赤【B】青【C】緑と表示される。
$a = array("【A】"=>"赤","【B】"=>"青","【C】"=>"緑");
foreach($a as $key => $value){
  echo $key.$value;
}


//foreach文の多次元連想配列(ネスト)とkeyによる名前付け
//foreach文では、多次元連想配列(ネスト）と各keyに名前を付ける事も可能
$food = array(
  "vegetable" => array("carrot" => "にんじん","tomato" => "トマト","onion" => "たまねぎ"),
  "fruit" => array("apple" => "りんご","orange" => "オレンジ","grape" => "ぶどう")
);
foreach($food as $groupkey => $namekey){
  echo"■".$groupkey."<br>";
  foreach($namekey as $eigoname => $nihonname){
    echo $eigoname.":".$nihonname."<br>";
  }
  echo"<br>";
}

//foreach文では、格納した値をソート（値の大きい順/小さい順等）で処理することもできる。
//ソートとは、あるモノをある順番によって、並び替えることを指します。数字の大きい順に並び替えたり、50音順やアルファベット順に並び替えりすることをソートすると言います。

//foreach文（ソートなし）の使い方//d改行c改行b改行aと表示
$a = array("d","c","b","a");
foreach($a as $key => $value){
  echo $value."<br>";
}

//foreach文（ソートあり）の使い方//a改行b改行c改行dと表示
$a = array("d","c","b","a");
sort($a);
foreach($a as $key => $value){
  echo $value."<br>";
}

?>