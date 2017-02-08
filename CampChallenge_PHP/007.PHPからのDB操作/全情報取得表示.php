<?php

try {





//接続準備
$PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

//SQL文の入力（何をしたいか。今回の場合は全情報の取得と表示）
$sql = "select * from profiles";

//SQLの実行準備
$quary = $PDO->prepare($sql);

//SQLを実行
$quary->execute();

//$resultに結果を格納
$result = $quary->fetchall(PDO::FETCH_ASSOC);

//$resultに格納した結果を表示
var_dump($result);


} catch (Exception $Exception) {
 die('接続に失敗しました:'.$Exception->getMessage());
}
 ?>
