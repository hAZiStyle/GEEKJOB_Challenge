<?php

// $zakka = "1.雑貨". "<br>";
// $nama = "2.生鮮食品". "<br>";
// $etc = "3.その他". "<br>";
//
// echo $zakka;
// echo $nama;
// echo $etc;

$total = $_GET['total'];
$kosuu = $_GET['kosuu'];
$syubetu = $_GET['syubetu'];

echo "種別：";
if ($syubetu == 1) {
  echo "雑貨";
}elseif ($syubetu == 2) {
  echo "生鮮食品";
}elseif ($syubetu == 3) {
  echo "その他";
}else  {
  echo "正しく入力してください";
}

echo "<br>";

echo "一個あたりの値段：";
echo $total / $kosuu;
echo "<br>";

echo "ポイント：";
if ($total >= 5000) {
  echo $total * 0.05 ;
}elseif ($total >= 3000) {
  echo $total * 0.04;
}





 ?>
