<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Numeron</title>
</head>
<body>
  <div class = "content">
  <?php
  // $name = htmlspecialchars($_REQUEST['name']);
  // $round = htmlspecialchars($_REQUEST['round']);
  // $url = "http://localhost:8888/shop2/api2.php?name=" . $name . "&round=" . $round;
  $url = "http://localhost:8888/shop2/db_watch.php";
  $json = file_get_contents($url);
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $array = json_decode($json);
  // echo $json;
  // print(var_dump($array));
  foreach($array as $val){
    echo '<br />id : ' . $val->{"id"};
    echo ',  name : ' . $val->{"name"};
    echo ',  round : ' . $val->{"round"};
  }
  //\nで改行されるけど、htmlで改行されなきゃ意味ない
  ?>
  <p>API成功だよ</p>
  <form action="api.html" method="get">
    <input type="submit" value="戻る！" />
  </form>
</div>
</body>
</html>
<link rel = "stylesheet" href = "add.css" />
