<?php
require_once "database.php";
$date = new DateTime();
$date = $date->format('Y-m-d H:i:s');

var_dump ($_POST);
$wallet = $_POST['wallet'];
$category = $_POST['category'];
$title = $_POST['title'];
$price = $_POST['price'];
$memo = $_POST['memo'];


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