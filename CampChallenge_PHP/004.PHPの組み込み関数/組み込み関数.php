<?php

/* 紹介していないPHPの組み込み関数を利用して、処理を作成してください。

講義では紹介されていないPHPの組み込み関数はたくさん存在します。
PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。

また、この処理を作成するに当たり、下記を必ず実装してください。
①処理の経過を書き込むログファイルを作成する。
②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
④最後に、ログファイルを読み込み、その内容を表示してください。 */


//touch — ファイルの最終アクセス時刻および最終更新日をセットする
touch('テスト.php');//あくまでテストファイル。実際は作っていない
date_default_timezone_get('Asia/Tokyo');//タイムゾーンの設定
mktime();//日時の取得

$access_time = date('Y/m/d H/i/s').'<br>';
$start = 'Start '.$access_time.'<br>';
$finished = 'End '.$access_time.'<br>';

//implode — 配列要素を文字列により連結する
$profile = array('MY PROFILE'.'豊川　和樹'.'23歳'.'東京');
$str = implode(",",$profile);

//microtime — 現在の Unix タイムスタンプをマイクロ秒まで返す
$start_time = microtime(true);
$end_time = microtime(true);

//fopen — ファイルまたは URL をオープンする
$fp = fopen('テスト.php'.'w');

//fgets — ファイルポインタから 1 行取得する
fgets($fp);
$start_time;

//fwrite — バイナリセーフなファイル書き込み処理
fwrite($fp,$start,$str);
$end_time;
fwrite($fp,"<br>処理速度： {$time}秒かかりました。<br><br>".$finish);
//fclose — オープンされたファイルポインタをクローズする
fclose($fp);

file_get_contents('テスト,php');
echo $fp;

 ?>
