<?php

//セッション開始！
session_start();

//セッションに情報を入れる

$_session['LastTimeData'] = date('Y年m月d日g時i分s秒');

//セッションからデータ取り出し

echo '前回のログインは。。。,'.$_session['LastTimeData'].'です！';

 ?>
