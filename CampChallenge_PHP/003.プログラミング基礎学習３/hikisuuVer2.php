<?php
//引数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、
//最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。
//1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、
//$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
//例）function sample($□□□, $△△△, $type)
// 引数が３つの関数書き出し部分(デフォルト値なし)

function sample($tekitou , $default = 5 , $type = false){
  $kake = $tekitou * $default ;

  if ($type == false) {
    echo $kake;
  }
  elseif ($type == true ){
    $nijo = $kake**2;
    echo  $nijo;

  }



}
sample(4,6,true);
//この処理をした時の結果は「576」
//$tekitou に　引数４　を代入し　$default　に引数６　を代入
//(変数$defaultのデフォルト値は５だが、自由に指定して変えることができる)
//その後、変数$tekitouと変数$default を掛けると「２４」となる
//if文を使い、falseの場合とtrueの場合の処理を作る
//上の処理の場合、引数trueが関数括弧内の変数$typeに代入されるため、
//elseifの方の処理になる。
//結果２４の二乗（２４＊２４）になるため「５６４」となる




 ?>
