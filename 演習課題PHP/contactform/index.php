<?php
// var_dump($_POST);
// echo($_POST['mail']);
// exit;
?>

<!doctype HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <script src="script.js"></script>
  <h1>お問合わせフォーム</h1>
  <form method="post" action="mail_confirm.php">
    <div>
      <label>名前</label>
      <br>
      <input type="text" class="text" size="35" name="name" value=<?php echo $_POST['name']; ?>>
    </div>
    <div>
      <label>メールアドレス</label>
      <br>
      <input type="text" class="text" size="35" name="mail" value=<?php echo $_POST['mail']; ?>>
    </div>
    <div>
      <label>年齢</label>
      <br>
      <select class="dropdown" name="age">
        <option value="">選択してください</option>
        <script>
          for (var i = 18; i <= 65; i++) {
            var default_age = <?php echo isset($_POST['age']) && is_numeric($_POST['age']) ? $_POST['age'] : 1000; ?>;
            if(i == default_age) {
              document.write("<option value selected=" + i + ">" + i + "歳</option>");
            }
            else {
              document.write("<option value=" + i + ">" + i + "歳</option>");
            }
          }
        </script>
      </select>
    </div>
    <div>
      <label>コメント</label>
      <br>
      <textarea cols="35" rows="7" name="comments">
        <?php echo $_POST['comments']; ?>
      </textarea>
    </div>
    <div>
      <input type="submit" class="submit" value="送信する" onclick="return checkForm();">
    </div>
  </form>
</body>

</html>

