<?php
//【8.連想配列（多次元配列）】//
//連想配列とは、配列の各箱のkey(0、1、2 ・・・）に別の文字列等を使って管理する方法//

//連想配列の書き方//
//-普通の配列-//
$country = array("日本","アメリカ","フランス");
//-連想配列-//
$country = array("アジア"=>"日本","アメリカ"=>"アメリカ","欧米"=>"フランス");

//連想配列の使い方//日本と表示
$country = array("アジア"=>"日本","アメリカ"=>"アメリカ","欧米"=>"フランス");
echo $country["アジア"];

//多次元配列とは、配列の各箱の中にさらに小さな箱を入れて管理する方法//
//多次元配列の書き方①//
$country = array(
  array("日本","タイ"),
  array("アメリカ","ブラジル"),
  array("フランス","ロシア")
);

//多次元配列の使い方//日本と表示
$country = array(
  array("日本","タイ"),
  array("アメリカ","ブラジル"),
  array("フランス","ロシア")
);
echo $country[0][0];

//多次元配列の使い方//タイと表示
$country = array(
  array("日本","タイ"),
  array("アメリカ","ブラジル"),
  array("フランス","ロシア")
);
echo $country[0][1];

//多次元配列の使い方//アメリカと表示
$country = array(
  array("日本","タイ"),
  array("アメリカ","ブラジル"),
  array("フランス","ロシア")
);
echo $country[1][0];

//多次元配列の使い方//ロシアと表示
$country = array(
  array("日本","タイ"),
  array("アメリカ","ブラジル"),
  array("フランス","ロシア")
);
echo $country[2][1];

//多次元配列の書き方②//
//-普通の配列-//
$asia = array("日本","タイ");
$america = array("アメリカ","ブラジル");

//多次元配列//
$country = array("$asia","$america");

//多次元配列の使い方//日本と表示
$asia = array("日本","タイ");
$america = array("アメリカ","ブラジル");

$country = array($asia,$america);
echo $country[0][0];


//多次元連想配列とは//
//多次元連想配列とは、arrayの各箱の中に小さな箱が入っており、さらに、各箱のkey(0、1、2 ・・・）に別の文字列等を使って管理する方法//

//多次元連想配列の書き方//
$country = array(
  "アジア"=>array("東アジア"=>"日本", "東南アジア"=>"タイ"),
  "アメリカ"=>array("北米"=>"アメリカ", "南米"=>"ブラジル"),
  "欧州"=>array("西欧"=>"フランス", "東欧"=>"ロシア")
);

//多次元連想配列の使い方//タイと表示
$country = array(
  "アジア"=>array("東アジア"=>"日本","東南アジア"=>"タイ"),
  "アメリカ"=>array("北米"=>"アメリカ","南米"=>"ブラジル"),
  "欧州"=>array("西欧"=>"フランス","東欧"=>"ロシア")
);
echo $country["アジア"]["東南アジア"];

?>
