<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="questionnaire.css">
</head>
<body>


<h1>〇〇に関するアンケート</h1>

<!-- 質問事項（POSTで送信） -->
<div id="questions-wrapper">
    <form action="02_post_confirm.php" method="post" class="questions"> <!-- 氏名 -->
        <p>氏名：<input type="text" name="name"></p>
    
        <p>メールアドレス：<input type="text" name="mail"></p> <!-- メールアドレス -->

        <p>参加可能日</p>
        <input type="checkbox" name="date[]" value="1">4月2日 <!-- 参加可能日(チェックボックス) -->
        <input type="checkbox" name="date[]" value="2">4月3日
        <input type="checkbox" name="date[]" value="3">4月9日
        <input type="checkbox" name="date[]" value="5">4月10日
        <input type="checkbox" name="date[]" value="4">4月16日
        <input type="checkbox" name="date[]" value="6">4月17日
    
        <p>場所</p>
        <input type="checkbox" name="place" value="1">新宿 <!-- 場所(チェックボックス) -->
        <input type="checkbox" name="place" value="2">恵比寿
        <input type="checkbox" name="place" value="3">渋谷
        <input type="checkbox" name="place" value="4">新橋
        <input type="checkbox" name="place" value="5">上野
        <input type="checkbox" name="place" value="6">赤羽
        
        <p>食事タイプ</p>
        <input type="checkbox" name="food-type" value="1">和食 <!-- 食事タイプ(チェックボックス) -->
        <input type="checkbox" name="food-type" value="2">中華
        <input type="checkbox" name="food-type" value="3">イタリアン
        <input type="checkbox" name="food-type" value="4">フレンチ
    
        <p>アレルギー<input type="text" name="allergy"></p> <!-- アレルギー -->
    
        <p>その他<input type="text" name="other"></p> <!-- その他 -->

        <input type="submit" value="確認">
    </form>
</div>




</body>
</html>

