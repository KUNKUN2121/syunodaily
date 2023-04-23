<?php
require_once "database.php";
$date = new DateTime();
$date = $date->format('Y-m-d H:i:s');

// Debug
$wallet = 1;
$category = 1;
$title = 'DEBUG';
$price = 502;
$memo = 'MEMO';

try{
    $stmt = $pdo->prepare('INSERT INTO post (date, wallet, category, title, price, memo) VALUES(:date, :wallet, :category, :title, :price, :memo )');

    // 値をセット
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':wallet', $wallet);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':price', $price);
    $stmt->bindValue(':memo', $memo);

    $stmt->execute();
    echo('データベース追加しました。');
} catch (PDOException $e) {
    echo 'error: ' . $e->getMessage();
    $return["msg"] =   $e->getMessage();
}
?>