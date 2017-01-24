<?php

$int = $_GET['int'];
$num1 = $int;
$num2 = '';
$othernum = null;

while($num1 != 2 ||$num1 != 3 ||$num1 != 5 ||$num1 != 7){
  if($num1%2==0){
   $num1 = $num1 / 2;
   $num2 .= '2, ';
   if($num1 == 1){
    break;
   }
  }elseif($num1%3==0){
   $num1 = $num1 / 3;
   $num2 .= '3, ';
   if($num1 == 1){
    break;
   }
  }elseif($num1%5==0){
   $num1 = $num1 / 5;
   $num2 .= '5, ';
   if($num1 == 1){
    break;
   }
  }elseif($num1%7==0){
   $num1 = $num1 / 7;
   $num2 .= '7, ';
   if($num1 == 1){
    break;
   }
  }else{
    if($num1 != 1){
$othernum = $num1;
}
break;
  }
}
echo '元の値：'.$int.'<br>';
echo '素数：'.$num2.'<br>';
echo 'その他：'.$othernum.'<br>';


?>
