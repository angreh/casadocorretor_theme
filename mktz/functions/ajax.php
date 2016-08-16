<?php

if ( isset($_POST['args']) && !empty($_POST['args']) )
{
    $url = 'http://casadocorretor.net/';

    $ch = curl_init();

    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_POST, 1 );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($_POST) );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $response = curl_exec( $ch );

    curl_close( $ch );

    echo $response;
}
else
{
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

    $UF = $_POST['uf'];
    $cidades = $Mktz->Cidades()->getCidades($UF);
    echo $cidades;
}

