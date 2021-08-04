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
ワクチン接種記録を仲間内で共有できます<br>
もしもの時に役立つかも知れません！</p>
</div>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="s">
   <fieldset>
    <legend><h2>接種記録</h2></legend>
     <label>氏名：<input type="varchar" size="40" name="name"></label><br><br>
     <label>接種回：<input type="int" name="times"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds"></label>
     <label>　日時：<input type="text" name="indate"></label><br>
     <label>接種回：<input type="int" name="times2"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds2"></label>
     <label>　日時：<input type="text" name="indate2"></label><br>
     <label>　コメント(副反応など）：<input type="text" name="comments"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form><br>

<script src="http://code.jquery.com/jquery-3.0.0.js"></script>
<script>
$('input [type=file]').change(function(){
var file = $(this).prop('files')[0];
if(!file.type.match('image.*')){
$(this).val('');
$('.cms-thumb > img').html('');
return;
}
var reader = new FileReader();
reader.onload = function(){
  $('.cms-thumb > img').attr('scr', reader.result);
}
reader.readAsDataURL(file);
});
</script> -->


  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">接種記録を確認する</a></div>

    <form method="post" action="logout.php">
  <div class="s">
   <fieldset>
     <input type="submit" value="logout">
    </fieldset>
  </div>
</form><br>


    </div>
  </nav>
 
 

<!-- Main[End] -->
</body>
</html>