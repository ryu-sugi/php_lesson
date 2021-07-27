<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sample</title>
</head>
<body>

<?php 

  // PHP 配列
  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);


  // 繰り返し表現(キーとバリューを順番に取り出す為のforeach文)
  foreach($scores as $key => $value) {

  // 出力結果の表示
  echo $key.'は'.$value.'点です。';
  }
?>

</body>
</html>