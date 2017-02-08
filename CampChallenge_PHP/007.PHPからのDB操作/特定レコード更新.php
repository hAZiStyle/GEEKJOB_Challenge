<?php

//以下の課題を、PHPからのPDOを用いて実現してください。
//profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
try {

//接続準備
$PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

//SQL文の入力（何をしたいか。今回の場合はprofileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新）
$sql = "update profiles set profilesID=1, name='松岡修造',age=48,birthday='1967-11-06' where profilesID=1 ";
//SQLの実行準備
$quary = $PDO->prepare($sql);
//SQLを実行
$quary->execute();


//そして更新されているか、結果をSELECT文で表示させる
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
