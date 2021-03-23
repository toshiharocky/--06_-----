<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
// 時間データ取得
$time = date('m/d H:i:s');

// ファイル(data.json)に書き込み
$file = fopen("data/data.json", "a");
session_start();
fwrite($file, $time." ".$_SESSION["jsonForRecord"]."\n");
fclose($file);
?>


<h1>送信完了しました</h1>

</body>
</html>