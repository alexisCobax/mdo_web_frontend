<?php

namespace app\helpers;

class AccessTokenHelper
{
    public static function getToken()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://scl-sandbox.dev.clover.com/pakms/apikey',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 859c0171-ee8b-7c4b-7a07-3a02288fbc03'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $datos = json_decode($response);
        return $datos->apiAccessKey;
    }
}
