<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録フォーム</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
　  <h2>登録フォーム</h2>
    <form action="insert.php" method="post">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required autocomplete="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required autocomplete="email"><br><br>
        
        <label for="address">住所:</label><br>
        <input type="text" id="address" name="address" required autocomplete="address"><br><br>
        
        <label for="experience">メイク施術経験</label><br>
        <input type="radio" id="experience_yes" name="experience" value="yes" checked>
        <label for="experience_yes">あり</label>
        <input type="radio" id="experience_no" name="experience" value="no">
        <label for="experience_no">なし</label><br><br>
        
        <input type="submit" value="登録する">
    </form>
</body>
</html>
