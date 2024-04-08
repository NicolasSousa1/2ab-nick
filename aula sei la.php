<?php 

$a = 5;
$b = 5.34;
$c = "hello";
$d = true;
$e = null;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


$a = 5;
$b = 5;
$c = "25 kilometros";
$d = "kilomestros 25";
$e = "hello";
$f = true;
$g = null;

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

echo "<br>";
echo "### cast para inteiro ###";
echo "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

echo "<br>";
echo "### cast para float ###";
echo "<br>";

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);






?>