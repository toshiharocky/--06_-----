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


    

    // Firebase登録用のsendMessage関数
    // function sendMessage(){
        // <!-- POSTデータ受け取り&変数へ代入 -->
            // $name= $_POST['name'];
            // $mail= $_POST['mail'];
            // $date= $_POST["date"];
            // $place= $_POST["place"];
            // $food= $_POST["food-type"];
            // $allergy= $_POST['allergy'];
            // $other= $_POST['other'];

        
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
        
        // オブジェクトをJSONに変換
        $json = json_encode($str);
        session_start();
        $_SESSION["jsonForRecord"] = $json;
        echo $json;
?>
    
<!-- 確認項目の一覧化 -->
<p>氏名:<?=h($name)?></p>
<p>メールアドレス：<?=h($mail)?></p>
<p>参加可能日:<?=h($dateForBrouse)?></p>
<p>場所:<?=h($placeForBrouse)?></p>
<p>食事タイプ:<?=h($foodForBrouse)?></p>
<p>アレルギー:<?=h($allergy)?></p>
<p>その他:<?=h($other)?></p>
<p>文字列:<?= $json?></p>

<!-- 記入画面に戻るボタン -->
<button onclick="history.back(); return false;" value="戻る">戻る

<!-- 送信ボタン -->
<button onclick="location.href='04_completed.php'" value="送信" name="submit" id="submit">送信


<!-- 「登録」ボタンを押下したらFirebaseへ登録 -->
<script>
    $("#submit").on('click', function(){
        let js_array = '<?= $json?>';
        let js_array_db = JSON.parse(js_array);
        console.log(js_array_db);
        firebase.database().ref(js_array_db.name).set(js_array_db);
    })
</script>




</body>
</html>