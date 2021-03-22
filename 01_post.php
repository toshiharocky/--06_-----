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

        <p>参加可能日</p> <!-- 参加可能日(チェックボックス) -->
        <input type="checkbox" name="date[]" value="4月2日">4月2日
        <input type="checkbox" name="date[]" value="4月3日">4月3日
        <input type="checkbox" name="date[]" value="4月9日">4月9日
        <input type="checkbox" name="date[]" value="4月10日">4月10日
        <input type="checkbox" name="date[]" value="4月16日">4月16日
        <input type="checkbox" name="date[]" value="4月17日">4月17日
    
        <p>場所</p> <!-- 場所(チェックボックス) -->
        <input type="checkbox" name="place[]" value="新宿">新宿
        <input type="checkbox" name="place[]" value="恵比寿">恵比寿
        <input type="checkbox" name="place[]" value="渋谷">渋谷
        <input type="checkbox" name="place[]" value="新橋">新橋
        <input type="checkbox" name="place[]" value="上野">上野
        <input type="checkbox" name="place[]" value="赤羽">赤羽
        
        <p>食事タイプ</p> <!-- 食事タイプ(チェックボックス) -->
        <input type="checkbox" name="food-type[]" value="和食">和食
        <input type="checkbox" name="food-type[]" value="中華">中華
        <input type="checkbox" name="food-type[]" value="イタリアン">イタリアン
        <input type="checkbox" name="food-type[]" value="フレンチ">フレンチ
    
        <p>アレルギー<input type="text" name="allergy"></p> <!-- アレルギー -->
    
        <p>その他<input type="text" name="other"></p> <!-- その他 -->

        <input type="submit" value="確認">
    </form>
</div>




</body>
</html>

