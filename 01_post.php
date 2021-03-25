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


<h1>北斗★南斗大懇親会 日程調整</h1>

<!-- 質問事項（POSTで送信） -->
<div id="questions-wrapper">
    <form action="02_post_confirm.php" method="post" class="questions" name="form"> <!-- 氏名 -->
        <p>氏名(必須)</p>
        <select name="name" id="name">
            <option value="選択してください" selected>選択してください</option>
            <option value="ケンシロウ">ケンシロウ</option>
            <option value="ラオウ">ラオウ</option>
            <option value="トキ">トキ</option>
            <option value="ジャギ">ジャギ</option>
            <option value="ユリア">ユリア</option>
            <option value="シン">シン</option>
            <option value="レイ">レイ</option>
            <option value="サウザー">サウザー</option>
            <option value="ユダ">ユダ</option>
            <option value="マミヤ">マミヤ</option>
            <option value="フドウ">フドウ</option>
            <option value="ジュウザ">ジュウザ</option>
            <option value="リン">リン</option>
            <option value="バット">バット</option>
            <option value="カイオウ">カイオウ</option>
        </select>
        
    
        <p>メールアドレス(必須)</p> <!-- メールアドレス -->
        <input class="text_input" type="text" name="mail">

        <p>参加可能日</p> <!-- 参加可能日(チェックボックス) -->
        <div class="check_input">
            <input type="checkbox" name="date[]" value="4月2日" id="date1">4月2日
            <input type="checkbox" name="date[]" value="4月3日" id="date2">4月3日
            <input type="checkbox" name="date[]" value="4月9日" id="date3">4月9日
            <input type="checkbox" name="date[]" value="4月10日" id="date4">4月10日
            <input type="checkbox" name="date[]" value="4月16日" id="date5">4月16日
            <input type="checkbox" name="date[]" value="4月17日" id="date6">4月17日
        </div>

        <p>希望場所</p> <!-- 場所(チェックボックス) -->
        <div class="check_input">
            <input type="checkbox" name="place[]" value="新宿">新宿
            <input type="checkbox" name="place[]" value="恵比寿">恵比寿
            <input type="checkbox" name="place[]" value="渋谷">渋谷
            <input type="checkbox" name="place[]" value="新橋">新橋
            <input type="checkbox" name="place[]" value="上野">上野
            <input type="checkbox" name="place[]" value="赤羽">赤羽
        </div>
        
        <p>希望食事タイプ</p> <!-- 食事タイプ(チェックボックス) -->
        <div class="check_input">
            <input type="checkbox" name="food-type[]" value="和食">和食
            <input type="checkbox" name="food-type[]" value="中華">中華
            <input type="checkbox" name="food-type[]" value="イタリアン">イタリアン
            <input type="checkbox" name="food-type[]" value="フレンチ">フレンチ
        </div>
        
        <p>アレルギー</p> <!-- アレルギー -->
        <input class="text_input" type="text" name="allergy">
    
        <p>その他</p> <!-- その他 -->
        <input class="text_input" type="text" name="other">

        <div class="submit_btn">
            <input type="submit" value="確認" class="btn" id="confirm" onclick="return checkForm()">
        </div>
    </form>
</div>

<script>
    function checkForm(){
        console.log(document.form.name.value);
        let date1 = document.getElementById('date1');
        let date2 = document.getElementById('date2');
        let date3 = document.getElementById('date3');
        let date4 = document.getElementById('date4');
        let date5 = document.getElementById('date5');
        let date6 = document.getElementById('date6');
        console.log(date1.checked);

        if(document.form.name.value == "選択してください"){
            alert("参加者名を選んでください");
            return false;
        } else if(document.form.mail.value == ""){
            alert("メールアドレスを記入してください");
            return false;
        } else if(date1.checked ||date2.checked ||date3.checked ||date4.checked ||date5.checked ||date6.checked){
            return true;
        } else if(confirm("今回は不参加でよろしいですか？")){
            return true;
        } else {
            return false;
        }
        };
</script>


</body>
</html>

