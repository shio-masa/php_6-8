<?php

//1. GETデータ取得
$id = $_GET["id"];

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます

try {
    $pdo = new PDO('mysql:dbname=vaccination_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

$sql = "SELECT * FROM vaccination_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt ->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();

// /４．データ登録処理後
$view = "";
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    $row = $stmt -> fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>接種記録</title>
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
ワクチン接種記録を仲間内で供有できます<br>
もしもの時に役立つかも知れません！</p>
</div>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="ranking">
   <fieldset>
    <legend><h2>接種記録</h2></legend>
     <label>氏名：<input type="varchar" size="40" name="name"></label><br><br>
     <label>接種回：<input type="int" name="times"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds"></label>
     <label>　日時：<input type="date" name="indate"></label><br>
     <label>接種回：<input type="int" name="times"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds"></label>
     <label>　日時：<input type="date" name="indate"></label><br>
     <label>　コメント(副反応など）：<input type="text" name="comments"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form><br>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">接種記録を確認する</a></div>
    </div>
  </nav>
<!-- Main[End] -->
</body>
</html>