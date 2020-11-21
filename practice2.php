<?php

$name = "naito yoshiteru";
if ($name == true ) {
    echo "私は naito yoshiteru です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";


$total = 0;
echo $total;
for($i =0; $i <=10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

$hruits = array("apple","orange", "lemon","banana","peach");
foreach($hruits as $hruite){
echo $hruite;
echo "\n";
}


/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}