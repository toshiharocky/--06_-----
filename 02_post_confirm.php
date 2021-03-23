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
// <!-- funcs.phpの読み込み -->
require_once("funcs.php");

// <!-- POSTデータ受け取り&変数へ代入 -->
    $name= $_POST['name'];
    $mail= $_POST['mail'];
    $date= $_POST["date"];
    $place= $_POST["place"];
    $food= $_POST["food-type"];
    $allergy= $_POST['allergy'];
    $other= $_POST['other'];

    // ブラウザ表示用に複数回答の表示をオブジェクトから並列表示へ変更
    $dateForBrouse = implode(",", $_POST["date"]);
    $placeForBrouse = implode(",", $_POST["place"]);
    $foodForBrouse = implode(",", $_POST["food-type"]);


    $time = date('m/d H:i:s');

// Firebase登録用のsendMessage関数
function sendMessage(){
    // 情報をオブジェクト化
    $str = array(
        "name" => h($name),
        "mail" => h($mail),
        "date" => $date,
        "place" => $place,
        "food" => $food,
        "allergy" => h($allergy),
        "other" => h($other)
    );
    
    // var_dump($str);
    $json = json_encode($str);
    ref(h($name)).push($json);
    
    // ファイル(data.json)に書き込み
    $file = fopen("data/data.json", "a");
    fwrite($file, $time." ".$json."\n");
    fclose($file);
    ?>
    }

<!-- 確認項目の一覧化 -->
<p>氏名:<?=h($name)?></p>
<p>メールアドレス：<?=h($mail)?></p>
<p>参加可能日:<?=h($dateForBrouse)?></p>
<p>場所:<?=h($placeForBrouse)?></p>
<p>食事タイプ:<?=h($foodForBrouse)?></p>
<p>アレルギー:<?=h($allergy)?></p>
<p>その他:<?=h($other)?></p>

<!-- 記入画面に戻るボタン -->
<button onclick="history.back(); return false;" value="戻る">戻る

<!-- 送信ボタン -->
<button onclick="location.href='04_completed.php'" value="送信" id="submit">送信
<?php

?>

<!-- 「登録」ボタンを押下したらfirebaseへ登録 -->


<!-- 「登録」ボタンを押下したら「data.txt」への書き込み -->




<!-- 以下、Firebase -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBSpu4gugaQNUs8E1RfzfEz-H2ZMT3Rfo8",
    authDomain: "php-questionnaire.firebaseapp.com",
    projectId: "php-questionnaire",
    storageBucket: "php-questionnaire.appspot.com",
    messagingSenderId: "536483752965",
    appId: "1:536483752965:web:a689b5d992f0aee456006c"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const ref = firebase.database().ref();
</script>

</body>
</html>