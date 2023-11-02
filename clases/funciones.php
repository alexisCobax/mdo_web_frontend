<?php
$URLDominio = "https://mayoristasdeopticas.net/";
$URLimagen = "https://phpstack-1091339-3819555.cloudwaysapps.com/storage/app/public/images/";
$url = 'http://phpstack-1091339-3819555.cloudwaysapps.com';
$usuarioLogueado = false;
//$url = 'http://172.20.0.6';

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url.'/api/me');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        'Authorization: Bearer ' . $_COOKIE['token'],
        'Content-Type: application/json' 
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = "Error al realizar la consulta al API: " . curl_error($ch);
        curl_close($ch);
        return $error_msg;
    }

    curl_close($ch);

    $responseApi = json_decode($response, true);

    $responseApi = $responseApi['user']['id'];

    if(isset($responseApi)){
    $usuarioLogueado = true; 
    }
