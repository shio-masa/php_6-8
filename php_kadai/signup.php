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
  <h1 class="top_title">Vaccine log</h1>
  </div>
  <p class="top_word">ワクチン接種記録を残しましょう<br>
ワクチン接種記録を仲間内で共有できます<br>
もしもの時に役立つかも知れません！</p>
</div>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからnewuser_act.phpにデータを送ります -->
<form method="post" action="signupaction.php">
  <div class="vaccine">
   <fieldset>
    <legend><h2>新規ユーザー登録</h2></legend>
     <label>　　　　お名前：<input type="text" size="40" name="name"></label><br>
     <label>　　　　　カナ：<input type="text" size="40" name="kana"></label><br>
     <label>メールアドレス：<input type="text" size="40" size="40" name="email"></label><br>
     <label>ユーザーネーム：<input type="text" size="40" name="u_name"></label><br>
     <label>　　ログインID：<input type="text" name="lid"></label><br>
     <label>　　パスワード：<input type="text" name="lpw"></label><br><br>
     <input type="submit" value="　　　　　　　送信　　　　　　　" href="login.php"><br>
   
    </fieldset>
  </div>
</form><br>
 <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="login.php">すでにアカウントをお持ちの方はこちら</a></div>
    </div>
  </nav>
<!-- Main[End] -->
</body>
</html>