<?php

//一度目の訪問

$access_time = date('Y年m月d日g時i分s秒');
setcookie('LastLoginDate', $access_time);
echo $access_time;
echo '<br>';





 ?>

<?php

//前回のログイン
$lastdate = $_COOKIE['LastLoginDate'];

echo 'おかえりなさい豊川さん！','<br>';
echo '前回のログインは。。。,'.$lastdate.',です！';




 ?>
