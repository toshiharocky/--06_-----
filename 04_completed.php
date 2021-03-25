<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="questionnaire.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    

<?php
// 時間データ取得
$time = date('m/d H:i:s');

// ファイル(data.json)に書き込み
$file = fopen("data/data.json", "a");
session_start();
fwrite($file, $_SESSION["jsonForRecord"].","."\n");
fclose($file);
?>


<h1>送信完了しました</h1>
<div class="submit_btn">
    <button onclick="location.href='01_post.php'" class="btn">入力画面に戻る<br>
</div>

<div class="submit_btn">
    <button onclick="location.href='05_showResult.html'" class="btn">集計画面
</div>

</body>
</html>