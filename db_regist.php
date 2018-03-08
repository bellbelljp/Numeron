<?php
header("Content-Type: application/json; charset=UTF-8");
header("X-Content-Type-Options: nosniff");
require('dbconnect.php');

if(isset($_REQUEST['name'])){
  $name = $_REQUEST['name'];
}else{
  echo "nameの値がありません。", PHP_EOL;
}
if(isset($_REQUEST['round'])){
  $round = $_REQUEST['round'];
  if(!is_numeric($round)){ echo "roundは数値ではありません。", PHP_EOL; }
}else{
  echo "roundの値がありません。", PHP_EOL;
}

$stmt = $pdo->query('INSERT INTO ranking(name, round) VALUES(\'' . $name . '\', \'' . $round . '\')');

$stmt->commit();

?>


<p>商品を登録しました</p>
<p><a href = "api.html">一覧に戻る</a></p>
