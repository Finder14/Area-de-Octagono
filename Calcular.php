<?php

header('Content-Type: text/html; charset=utf-8');

$area = ($_REQUEST['perimetro'] * $_REQUEST['apotema'])/2;

echo $area;

?>