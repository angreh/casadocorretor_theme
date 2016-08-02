<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

$UF = $_POST['uf'];
$cidades = $Mktz->Cidades()->getCidades($UF);
//$cidades = str_replace( '"', "'", $cidades );
//$cidades = utf8_decode(fixBadUnicodeForJson($cidades));
echo $cidades;