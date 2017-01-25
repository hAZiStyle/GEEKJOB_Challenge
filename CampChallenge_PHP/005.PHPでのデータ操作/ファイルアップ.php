<html>
  <head>
  </head>
  <body>
    <from enctype="multipart/form-data"
    action="sample.php" method="post">
    ファイル選択：<input name="userfile" type="file">
    </from>

  </body>
<html>

<?php
//アップロードされたファイル情報確認
var_dump($_FILES);

//サーバー側に保存する名前
$file_name = 'uploaded.txt';
//アップロードされたファイルを移動する
move_uploaded_file($_FILES['userfile']['tmp_name'],$file_name);




 ?>
