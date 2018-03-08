<?php
header("Content-Type: application/json; charset = UTF-8");
header("X-Content-Type-Options: nosniff");
require('dbconnect.php');

$stmt = $pdo->query('SELECT * FROM ranking ORDER BY round ASC');

while($table = $stmt->fetch()){
  $json_array[] = array(
  'id'=>$table['id'],
  'name'=>$table['name'],
  'round'=>$table['round']
  );
}

echo json_encode($json_array);

?>

