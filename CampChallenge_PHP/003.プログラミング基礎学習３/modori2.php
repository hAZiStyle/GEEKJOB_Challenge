<?php


function personal(){
    $data = array(
      "id"       => 7650,
      "name"     => "豊川",
      "birthday" => "1993/10/18",
      "address"  =>'東京都大田区',
    );
    return $data;
  }
$alldeta = personal();
foreach($alldeta as $value){
  echo $value;
}






 ?>
