<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="questionnaire.css">
    <!-- firebaseの読み込み -->
    
</head>
<body>
<?php
// <!-- funcs.phpの読み込み -->
require_once("funcs.php");

// <!-- POSTデータ受け取り&変数へ代入 -->
    $name= $_POST['name'];
    $mail= $_POST['mail'];
    $date= implode(",", $_POST["date"]);
    $place= implode(",", $_POST["place"]);
    $food= implode(",", $_POST["food-type"]);
    $allergy= $_POST['allergy'];
    $other= $_POST['other'];

    $time = date('Y-m-d H:i:s');

    // 名前とメールを結合
    $str = $time.' / '.$name.' / '.$mail.' / '.$date.' / '.$place.' / '.$food.' / '.$allergy.' / '.$other;

    
    // ファイルに書き込み
    $file = fopen("json/json.json", "a");
    fwrite($file, h($str)."\n");
    fclose($file);

    ?>

<!-- 確認項目の一覧化 -->
<p>氏名:<?=h($name)?></p>
<p>メールアドレス：<?=h($mail)?></p>
<p>参加可能日:<?=h($date)?></p>
<p>場所:<?=h($place)?></p>
<p>食事タイプ:<?=h($food)?></p>
<p>アレルギー:<?=h($allergy)?></p>
<p>その他:<?=h($other)?></p>

<!-- 記入画面に戻るボタン -->
<button onclick="history.back(); return false;" value="戻る">戻る

<!-- 送信ボタン -->
<button onclick="location.href='04_completed.php'" value="送信" id="submit">送信




</body>
</html>