<?php

$text = '<p>Test</p>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p>');
echo "\n";

$hai=array("abc","def","ghi");
echo count($hai);
echo "\n";
echo array_push($hai,"llll");
echo "\n";

$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];
$items4 = array_merge($items1, $items2, $items3);
print_r($items4);  //配列はechoでは表示できない?
echo "\n";

echo time();
echo "\n";

echo mktime(0, 0, 0, 7, 12, 2020);
echo "\n";

echo date('Y年m月d日');
echo "\n";

