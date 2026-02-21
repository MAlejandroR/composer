<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

use Vistas\J;
use Vistas\I;
use Vistas\K;
use Vistas\L;


$a = new \BaseDatos\Mongo\A();
$a2 = new \BaseDatos\Mysql\A();
$b = new \BaseDatos\Mongo\B();
$c = new \BaseDatos\Mongo\C();
$d = new \BaseDatos\Mysql\D();
$e = new \BaseDatos\Mysql\E();
$f = new \Controlador\F();
$g = new \Vistas\I();
$h = new J();
$i = new I();
$j = new J();
$k = new K();
$l = new L();


echo $a;
echo $a2;
echo $b;
echo $c;
echo $d;
echo $e;
echo $f;
echo $g;
echo $h;
echo $i;
echo $j;
echo $k;
echo $l;

