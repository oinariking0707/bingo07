<?php
require_once(__DIR__.'/bingo.php');


function h($s){
  return htmlspecialchars($s,ENT_QUOTES,'UTF-8');
}

 ?>



<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>BINGO</title>
<link rel="stylesheet" href="styles.css">
</head>
Ok
<body>
  <div class="content">
  <table>
    <!--<tr>横軸 <th>ヘッダー要素　<td>縦軸　<td>テーブルデータ-->
    <tr>
      <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
    </tr>
    <!--横軸＄iで展開 -->
    <?php for($i=0; $i<5; $i++) :?>
    <tr>
      <!--縦軸＄uで展開 -->
      <?php for($u=0; $u<5; $u++) :?>
      <td><?php echo h($num[$u][$i]); ?></td>
    <?php endfor; ?>
    </tr>
  <?php endfor; ?>
  </table>
</div>
</body>
</html>
