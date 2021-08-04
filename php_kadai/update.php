<?php

//1. POSTデータ取得
$id           = $_POST["id"];
$name = $_POST["name"];
$times = $_POST["times"];
$vaccine_kinds = $_POST["vaccine_kinds"];
$indate = $_POST["indate"];
$comments = $_POST["comments"];


//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます

try {
    $pdo = new PDO('mysql:dbname=vaccination_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

//3. UPDATE table SET.....;で更新
$sql ='UPDATE ranking_table SET name=:name, times=:times, vaccine_kinds=:vaccine_kinds, indate=:indate, comments=:comments, 
WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',         $name,         PDO::PARAM_STR);  
$stmt->bindValue(':times',        $times,        PDO::PARAM_INT);  
$stmt->bindValue(':vaccine_kinds',  $vaccine_kinds,  PDO::PARAM_STR);  
$stmt->bindValue(':indate',       $indate,       PDO::PARAM_STR);  
$stmt->bindValue(':comments', $comments, PDO::PARAM_STR);  
$stmt->bindValue(':id',           $id,           PDO::PARAM_INT); 
$status = $stmt->execute();

// /４．データ登録処理後
$view = "";
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: select.php");
    exit;
}

?>