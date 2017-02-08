<?php

try {

  //接続の確立
  //必要な値値を渡してPODオブジェクト（この場合は接続用の通信機のようなもの）を変数に格納して用意する
  $PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

  $sql = 'insert into profiles(profilesID,name) values(22,"豊川")';

  $query = $PDO->prepare($sql);

  $query->execute();





} catch (PDOException $Exception) {
  die('接続に失敗しました:'.$Exception->getMessage());

}






 ?>
