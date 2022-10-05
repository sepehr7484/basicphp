<?php
// علائم پايين اپراتور ها عملگر در پي اچ پي هستن.
//    *  -  /  +  &  >  <  ! != ==
//    === || % ** += *= /=  -= %=  !==
//    >= <=  ++ -- and  or  xor  ?? ?:

$n1=12;
$n2=13;
echo '<pre>';
var_dump($n1 === $n2);
var_dump($n1 !== $n2);
var_dump($n1 != $n2);
var_dump($n2++);
var_dump(++$n2);
var_dump($n2>$n1);
var_dump($n2<$n1);

echo '<pre>';
