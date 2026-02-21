<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

use Vistas\J;
use Vistas\I;
use Vistas\K;
use Vistas\L;


use BaseDatos\Mysql\Persona;
use     Vistas\Plantilla;

$generador = Faker\Factory::create("es_ES");


for ($n=0; $n<10; $n++){
    $nombre =$generador->firstname();
    $edad = $generador->numberBetween(15,90);
    $email = $generador->email();
    $personas[]=new Persona($nombre,$email,$edad);
}

$campos = ["Nombre", "Email", "Edad"];
$tabla_html=Plantilla::getTableHtml($campos, $personas);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset style="background:antiquewhite; width:50%; margin:10% ">
    <legend>Listado de personas</legend>
    <?=$tabla_html?>
</form>

</fieldset>
</body>
</html>


