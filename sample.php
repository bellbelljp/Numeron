sample.php
<?php
//HTTPリクエストから送られた文字データを受け取りJSON形式に変換
$postData = file_get_contents("php://input");
$inputData = json_decode($postData, true);

if ($inputData == NULL) { exit; }

//データベースアクセス
try {
    $pdo = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $Exception) { exit; }

//$inputDataは連想配列。JSONを作る時の[Key]にて値を変数に入力
$str = $inputData["str"];
$val1 = $inputData["val1"];
$val2 = $inputData["val2"];

//SQL文を作りMySQLにINSERTする
$sql = 'SELECT * FROM ranking ORDER BY round ASC';
$stmh = $pdo->prepare($sql);
$stmh->bindValue(1, $str);
$stmh->bindValue(2, $val1);
$stmh->bindValue(3, $val2);
$stmh->bindValue(4, date('c'));
$stmh->execute();
$pdo->null;
?>
<p>Hello Numeron</p>
