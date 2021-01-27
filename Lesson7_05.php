<?php 
$a = 10;
$b = 1;
$bool01 = ($a > $b); //10>1 :正しい

echo $bool01."\n";　//出力結果はTrueの1
echo gettype($bool01)."\n"; //出力結果はTrueの1と ブール型であるboolean型が出力される