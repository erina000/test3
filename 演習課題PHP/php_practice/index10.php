<?php
//【10.関数】
//関数の書き方
// function 関数名(引数1, 引数2, 引数3・・・){
//   処理1;
//   処理2;
//   return戻り値
// }

//関数の使い方
//消費税 8% で計算した場合//674改行836改行944改行728と表示
function totalPrice($fruitprice,$tax=1.08,$haiso=350){
  return($fruitprice*$tax)+$haiso;
}
$mikan = totalPrice(300);
echo $mikan."<br>";
$ringo = totalPrice(450);
echo $ringo."<br>";
$ichigo = totalPrice(550);
echo $ichigo."<br>";
$nashi = totalPrice(350);
echo $nashi;

//「四角形の面積」 を表示したい場合で、各四角形は、縦3と横5の四角、縦5と横10の四角、縦7と横3の四角とした場合。//15改行50改行21と表示
function shikaku($tate,$yoko){
  return $tate*$yoko;
}
echo shikaku(3,5);
echo "<br>";
echo shikaku(5,10);
echo "<br>";
echo shikaku(7,3);
//上記と意味は同じ
function shikaku($tate,$yoko){
  $xyz = $tate*$yoko;
  return $xyz;
}
echo shikaku(3,5);
echo "<br>";
echo shikaku(5,10);
echo "<br>";
echo shikaku(7,3);

?>