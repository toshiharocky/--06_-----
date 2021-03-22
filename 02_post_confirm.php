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
    $place= $_POST['place'];
    $food= $_POST['food'];
    $allergy= $_POST['allergy'];
    $other= $_POST['other'];

    ?>

// <!-- 確認項目の一覧化 -->
<p>氏名:<?=h($name)?></p>
<p>メールアドレス：<?=h($mail)?></p>
<p>参加可能日:<?=h($date)?></p>
<p>場所:<?=h($place)?>/p>
<p>食事タイプ<?=h($food)?></p>
<p>アレルギー:<?=h($allergy)?></p>
<p>その他:<?=h($other)?></p>

// <!-- 記入画面に戻るボタン -->
<link href="01_post.php" type=button value="戻る">

// <!-- 送信ボタン -->
<button link="04_completed" value="送信" id="submit">




</body>
</html>