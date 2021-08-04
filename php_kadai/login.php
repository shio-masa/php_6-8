<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン認証</title>
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding:auto;  font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
<div class="top">
  <div class="plate" id="mesiran">
  <h1 class="top_title">Vaccine Log</h1>
  </div>
  <p class="top_word">ワクチン接種記録を残しましょう<br>
  ワクチン接種記録を仲間内で共有できます<br>
  もしもの時に役立つかも知れません！</p>
</div>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="loginaction.php">
  <div class="vaccination">
   <fieldset>
    <legend><h2>ログイン認証</h2></legend>
     <label>　ID：<input type="text" size="40" name="lid"></label><br><br>
     <label>　PW：<input type="text" name="lpw"></label><br><br>
     <input type="submit" value="ログインする">
    </fieldset>
  </div>
</form><br>
<!-- Main[End] -->
 <footer class="footer">
  <a class="navbar-brand" href="signup.php">新規登録画面に戻る</a>
  </footer>
</body>
</html>