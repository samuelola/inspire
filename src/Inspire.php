<?php

namespace Samuelola\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        // $response = Http::get('https://inspiration.goprogram.ai/');

         // verify transaction 
        $curl = curl_init(); 
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.openai.com/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',  
                // "Authorization: $key"
            ),
        ));
        $new_response = curl_exec($curl);
        $err = curl_error($curl);
        $ress_new = json_decode($new_response);
         return $ress_new->message;
        //return $response['quote'] . ' -' . $response['author'];
    }
}