<?php
$URLDominio = "https://mayoristasdeopticas.net/";
$URLimagen = "https://phpstack-1091339-3819555.cloudwaysapps.com/storage/app/public/images/";
//$usuarioLogueado = isset($_COOKIE['token'])&&$_COOKIE['token']!="";
$url = 'http://phpstack-1091339-3819555.cloudwaysapps.com';
$usuarioLogueado = false;
//$url = 'http://172.20.0.5:8080';

// function statusLogin($url, $data, $bearer) {

//     $ch = curl_init();

//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     $headers = array(
//         'Authorization: Bearer ' . $bearer,
//         'Content-Type: application/json' 
//     );
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//     $response = curl_exec($ch);
//     if (curl_errno($ch)) {
//         $error_msg = "Error al realizar la consulta al API: " . curl_error($ch);
//         curl_close($ch);
//         return $error_msg;
//     }

//     curl_close($ch);

//     return json_decode($response, true);
// }

if($_COOKIE['token']){
    $usuarioLogueado = true; 
}
// if(isset($_COOKIE['token'])){

//         $data = array(
//             'token' => $_COOKIE['token']
//         );

//         $bearer = $_COOKIE['token'];

//         $resultado = statusLogin($url, $data, $bearer);
//         if(isset($resultado['user']['id']) && $resultado['user']['id']!=0){
//             $usuarioLogueado = true;
//         }else{
//                 //$usuarioLogueado = false;
//                 //$_COOKIE['token']="";
//         }
        
// }
//print_r($resultado);

