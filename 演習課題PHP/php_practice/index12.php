<?php
//【12.ループ処理（for文）のネスト】
//for文のネスト①
//1～10までの数字で偶数のみを表示//2改行4改行6改行8改行10と表示
for($i=1;$i<=10;$i++){
  if($i%2==0){
    echo $i."<br>";
  }
}

//for文のネスト②
for($i=1;$i<=3;$i++){
  echo"■外側のfor文".$i."回目<br>";
  for($a=1;$a<=3;$a++){
    echo"内側のfor文".$a."回目<br>";
  }
}

//for文がネストではない場合
for($i=1;$i<=3;$i++){
  echo"■外側のfor文".$i."回目<br>";
}
for($a=1;$a<=3;$a++){
    echo"内側のfor文".$a."回目<br>";
}

?>