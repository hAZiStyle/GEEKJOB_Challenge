


<html>
<head>
</head>
<body>
<form action="php_db操作08.php" method="post">
  <h2>DB検索用フォーム！？</h2>
  <input type="text" name="search_key"/>
  <input type="submit" value="GO!!"/>
</form>




<?php

/*以下の課題を、PHPからのPDOを用いて実現してください。検索用のフォームを用意し、
名前の部分一致で検索＆表示する処理を構築してください。
同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、
一つの.phpで完了できますので、チャレンジしてみてください*/

try {




//接続準備
$PDO = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');

} catch (Exception $Exception) {
  die('接続に失敗しました:'.$Exception->getMEssage());
}

//POSTされた値を受け取る
$search = '%'.$_POST['search_key'].'%';
$search_check = $_POST["search_key"];

//検索ワードの検証
if($search_check == Null){
  echo "入力してください";
}else{
 $sql = "select * from profiles where name like'$search';";
   $query = $pdo->prepare($sql);
   $query->execute();
 //実行結果の確認
$result = $query->fetchall(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo '<br>';{
    foreach($value as $value2){
      echo $value2.'<br>';
}
}
}
}
 ?>

</body>
</html>
