<!doctype HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>diworksblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select * from diworks_keijiban");

// var_dump($stmt);
// echo("<br>");
// $row = $stmt->fetch();
// var_dump($row);
// echo("<br>");
// echo $row['handlename'];
// exit();
?>
<script src="script.js"></script>
<header>
 <img src="diblog_logo.jpg">
 <div class="logo"></div>
  <ul>
   <li>トップ</li>
   <li>プロフィール</li>
   <li>D.I.Blogについて</li>
   <li>登録ファーム</li>
   <li>問い合わせ</li>
   <li>その他</li>
  </ul>

</header>

<main>
  <div class="main-box">
    <div class="left">
      <h1>プログラミングに役立つ書式</h1>
      <div class="left1">
        <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
          </div>
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>
          <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
          </div>
          <div>
            <input type="submit" class="submit" value="投稿する"onclick="return checkForm();">
          </div>
        </div>
        <div class="left2">
        <?php
        while($row = $stmt->fetch()){
          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
        }
        ?>
        </div>
      </div>
    </div>
  </div>
 
  <div class="rigft">
    <h3>人気の記事</h3>
    <ul>
      <li>PHPオススメの本</li>
      <li>PHP MyAdminの使い方</li>
      <li>いま人気のエディタTops</li>
      <li>HTMLの基礎</li>
    </ul>

    <h3>オススメリンク</h3>
    <ul>
      <li>ディーアイワークス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Eclipseのダウンロード</li>
      <li>Braketsのダウンロード</li>
    </ul>

    <h3>カテゴリ</h3>
    <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>JavaScript</li>
    </ul>

  </div>
 </div>
</main>

<footer>
  Copyright D.I.works|D.I blog is the one which provides A to Z about programmig
</footer>



</body> 
</html>



