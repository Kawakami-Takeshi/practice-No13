<?php

function multx($arr){
  $x=1;
  
    for ($i = 0; $i < count($arr); $i++) {
      $x=$x*$arr[$i];
    }
  return $x;
}

$xxx=array(1,3,5,7,9);

echo multx($xxx);
