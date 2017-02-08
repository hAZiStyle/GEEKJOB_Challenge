<?php

//以下の課題を、PHPからのPDOを用いて実現してください。
//課題「テーブルへ情報を格納」でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください
try {

//接続準備
$PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

//SQL文の入力（何をしたいか。今回の場合は「テーブルへ情報を格納」でINSERTしたレコードを指定して削除。SELECT*で結果を表示）
$sql = "delete from profiles where profilesID=6 ";
//SQLの実行準備
$quary = $PDO->prepare($sql);
//SQLを実行
$quary->execute();


//そして削除されているか、結果をSELECT文で表示させる
$sql = "select * from profiles";
//同じく実行準備
$quary = $PDO->prepare($sql);
//SQL実行
$quary->execute();


//$resultに結果を格納
$result = $quary->fetchall(PDO::FETCH_ASSOC);

//$resultに格納した結果を表示
var_dump($result);


} catch (Exception $Exception) {
 die('接続に失敗しました:'.$Exception->getMessage());
}
