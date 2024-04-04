<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>THANKYOU</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
try {
    // データベースに接続
    $pdo = new PDO('mysql:dbname=gsacademy_gs_kadai;charset=utf8;host=mysql647.db.sakura.ne.jp','gsacademy','');
    
    // エラーレポート設定を追加
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('データベース接続エラー:'.$e->getMessage());
}

// POSTデータが空でないかチェック
if (!empty($_POST)) {
    // POSTデータを取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];

    // データを挿入するSQLクエリ
    $sql = "INSERT INTO makeup_artists (name, email, address, experience) VALUES (?, ?, ?, ?)";

    // プリペアドステートメントを作成
    $stmt = $pdo->prepare($sql);

    // パラメータをバインドしてクエリを実行
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);
    $stmt->bindValue(3, $address, PDO::PARAM_STR);
    $stmt->bindValue(4, $experience, PDO::PARAM_STR);

    // クエリを実行し、結果をチェック
    if ($stmt->execute()) {
        echo "ご登録いただきありがとうございました！";
    } else {
        echo "エラー: レコードの挿入に失敗しました";
    }
} else {
    echo "エラー: 登録内容に不備があります";
}

// データベース接続を閉じる
$pdo = null;
?>
