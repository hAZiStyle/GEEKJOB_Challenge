<html>
<head>
  <title>複合検索</title>
</head>

<body>
  <!--フォームの設定-->
<form name="serch_form" action="" method="POST">
検索したいワードを入力してください。<br>
<br>
名前:
  <input type="text" name="name">
  <br>
年齢:
  <input type="number" min="0" max="99" name="age">
  <br>
誕生日:
  <input type="text" name="bd">
  <br>
  <input type="submit" value="検索">

<?php
//フォームの値を取得

if(isset($_POST['name'])){
  $name = $_POST['name'];
}else{
  $name = null;
}
if(isset($_POST['age'])){
  $age = $_POST['age'];
}else{
  $age = null;
}
if(isset($_POST['birthday'])){
  $bd = $_POST['birthday'];
}else{
  $bd = null;
}

if($name != null || $age != null || $bd != null){
try{
  //DB接続
  $pdo = new PDO('mysql:host=localhost:8889;dbname=Challenge_db;charset=utf8','carlos','hazi7650');
//SQL文
  $sql = "SELECT *FROM profiles WHERE name LIKE '%$name%' AND age LIKE '%$age%' AND birthday LIKE '%$bd%';";
//実行
  $query = $pdo->prepare($sql);
  $query->execute();
}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}
echo '<BR><H3>検索結果:</H3><br>';
//検索結果の取得
$result=$query->fetchAll(PDO::FETCH_ASSOC);
//検索結果の表示
foreach($result as $value){
  foreach($value as $value2){
    echo $value2.'<BR />';
  }
  }
}else{
  echo "値を入力してください";
}
?>

</form>

</body>

</html>
