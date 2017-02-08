<!DOCTYPE html>
<html　lang="ja">
<head>
<meta charset="UTF-8">
       <title>フォームからデータを挿入する</title>
</head>
  <body>
    <form name ="form1" action="フォームからデータを挿入.php" method="POST">
      ProfilesID:
      <input type="number" min="0" max="99" name="ID" ><br>
      Name:
      <input type="text" name="name" ><br>
      Tell:
      <input type="text" name="tell" ><br>
      Age:
      <input type="number" min="18" max ="100" name="age" ><br>
      Birthday:
      <input type="text" name="birthday" ><br>
      <br>
      <input type="submit" value="作成">
    </form>
</body>

<?php
//変数の初期化処理
$id = $_POST["ID"];
$name = $_POST["name"];
$tell = $_POST["tell"];
$age = $_POST["age"];
$bd = $_POST["birthday"];

//DB接続
try{
  $pdo = new PDO('mysql:host=localhost:8889;dbname=challenge_db;charset=utf8','carlos','hazi7650');
}catch(PDOExeption $Exeption){
  die('接続に失敗しました'.$Exeption->getMessage());
}echo '接続成功<br>';

//SQL文の記述
$sql = "insert into profiles values ($id, '$name','$tell',$age,'$bd')";

//実行
$query = $pdo->prepare($sql);
$query->execute();

//実行結果の確認
if($query->execute()==1){
echo "以下のプロフィールを追加しました。<br><br>";
$result_sql=$pdo->query("select * from profiles where profilesID = $id;");
$result = $result_sql->fetch(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo $value.'<br>';
}
}else{
  echo '値を入力してください！';
}
?>



</html>
