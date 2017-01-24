<?php

//奇数か偶数かを判別する処理をする時の式は
//if(変数　%[←余りを計算する時の記号] 2 == 0 )
//かなり忘れがちなのでしっかり覚えておくこと！！
   function kari_hikisuu ($kisuu){
 if ($kisuu % 2 == 0 ) {
      echo "偶数です";
     }
     else {
      echo "奇数です";
     }
 }


kari_hikisuu(9);




 ?>
