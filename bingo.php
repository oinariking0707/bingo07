<?php



$num=[];
//表示する数値
for($i=0; $i<5; $i++){
  $coll =range($i*15+1,$i*15+15);
  shuffle($coll);

  $num[$i] =array_slice($coll,0,5);
}

//真ん中を表示空白にする
$num[2][2]="X";

 ?>
