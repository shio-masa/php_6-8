<?php
//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$name = $_POST["name"];
$times = $_POST["times"];
$vaccine_kinds = $_POST["vaccine_kinds"];
$indate = $_POST["indate"];
$comments = $_POST["comments"];

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
// mamppの方は
// $pdo = new PDO('mysql:dbname=xxx;charset=utf8;host=localhost', 'root', 'root');

try {
    $pdo = new PDO('mysql:dbname=vaccination_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO vaccination_table(id, name, times, vaccine_kinds, indate, times2, vaccine_kinds2, indate2, comments)
VALUES(NULL, :name, :times, :times2, :vaccine_kinds, :vaccine_kinds2, :indate, :indate2, :comments)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  
$stmt->bindValue(':times', $times, PDO::PARAM_INT);  
$stmt->bindValue(':times2', $times, PDO::PARAM_INT);  
$stmt->bindValue(':vaccine_kinds', $vaccine_kinds, PDO::PARAM_STR);  
$stmt->bindValue(':vaccine_kinds2', $vaccine_kinds, PDO::PARAM_STR);  
$stmt->bindValue(':indate', $indate, PDO::PARAM_STR);  
$stmt->bindValue(':indate2', $indate, PDO::PARAM_STR);  
$stmt->bindValue(':comments', $comments, PDO::PARAM_STR);  
$status = $stmt->execute();

//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
    header("Location: select.php");
    exit;
}