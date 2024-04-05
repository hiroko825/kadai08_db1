<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録者一覧</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
<?php
try {
    // データベースに接続
    $pdo = new PDO('mysql:dbname=gsacademy_gs_kadai;charset=utf8;host=mysql647.db.sakura.ne.jp','gsacademy','Hiroko825');
    // エラーレポート設定を追加
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('データベース接続エラー:'.$e->getMessage());
}

// テーブルから「メイク施術経験あり」のデータを取得するSQLクエリ
$sql = "SELECT * FROM makeup_artists WHERE experience = 'yes'";

// クエリを実行し、結果を取得
$stmt = $pdo->query($sql);

// 結果を表示
echo "<h2>メイク施術経験ありの登録者一覧</h2>";
echo "<table border='1'>
<tr>
<th>名前</th>
<th>Email</th>
<th>住所</th>
</tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . (isset($row['name']) ? $row['name'] : '') . "</td>";
    echo "<td>" . (isset($row['email']) ? $row['email'] : '') . "</td>";
    echo "<td>" . (isset($row['address']) ? $row['address'] : '') . "</td>";
    echo "</tr>";
}

echo "</table>";

// データベース接続を閉じる
$pdo = null;
?>
</body>
</html>
