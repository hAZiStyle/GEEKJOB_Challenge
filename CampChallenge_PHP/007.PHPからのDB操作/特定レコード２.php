<?php

//以下の課題を、PHPからのPDOを用いて実現してください。
//nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください

try {

//接続準備
$PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

//SQL文の入力（何をしたいか。今回の場合はnameに「茂」を含む情報を取得し、画面に取得した情報を表示）
//↓メモ：名前に「茂」を「含む」の場合は「％％」で囲む。囲む場合はその前に「like」とつける↓
//%の使い方によって検索方法が変わる（詳しくはググってくだちい）
$sql = "select * from profiles where name like '%茂%' ";

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
