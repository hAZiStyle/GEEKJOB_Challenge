<?php
//課題「continue」の処理のうち2人目まででforeachのループを抜けるようにする


$user1 = array(
               $id   ='7650',
               $name = '豊川',
               $birth='1993/10/18',
               $add  ='大田区'
               );
$user2 = array(
               $id   ='1234',
               $name ='加藤',
               $birth='1994/02/09',
               $add  ='墨田区'
               );
$user3 = array(
               $id   ='5678',
               $name ='石川',
               $birth='1994/01/26',
               $add  ='墨田区'
               );
  $all = array(
              'profile1' => $user1,
              'profile2' => $user2,
              'profile3' => $user3
               );
               foreach($all as $key=>$value){
                   if($key == 'profile3')
                   break;
                 foreach($value as $key=>$value){
                        if($key == 'id' ||$key =='add'){
                         continue;}
               echo $value.'<br><br>';
               }
               }





?>
