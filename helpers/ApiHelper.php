<?php

namespace app\helpers;

class ApiHelper
{
    public function get(string $url): array
    {

        $ch = curl_init($url);

        if (isset($_COOKIE['token'])){
            $headers = ['Authorization: Bearer ' . $_COOKIE['token'] ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        } 

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (!$response) {
            return json_encode(['error' => curl_error($ch)]);
        }
        curl_close($ch);
        $data = json_decode($response, true);
/*         echo $url."<BR>";
        print_r( $data);
        echo "<BR>"; */
        //echo $url; $data;
        if (!$data) {
            return json_encode(['error' => 'Error al decodificar la respuesta JSON']);
        }
        return $data;
    }

    public function post(string $url, array $array): array
    {
        $ch = curl_init($url);
    
        $headers = [
            'Authorization: Bearer ' . $_COOKIE['token'],
        ];
    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
    
        $response = curl_exec($ch);

        if (!$response) {
            return ['error' => curl_error($ch)];
        }
    
        curl_close($ch);
        $data = json_decode($response, true);

        if (!$data) {
            return ['error' => 'Error al decodificar la respuesta JSON'];
        }
    
        return $data;
    }
    
}
