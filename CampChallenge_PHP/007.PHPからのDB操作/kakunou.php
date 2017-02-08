<?php


try {




//以下の課題を、PHPからのPDOを用いて実現してください。
//前回の課題「テーブルの作成とinsert」で作成したテーブルに自由なメンバー情報を格納する処理を構築してください

$PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

$sql = 'insert into profiles values(6,"加藤　碧","080-1234-5432",23,"1994-02-09")';

$query = $PDO->prepare($sql);

$query->execute();

$PDO = Null ;


} catch (Exception $Exception) {
   die('接続に失敗しました:'.$Exception->getMessage());
}

?>
