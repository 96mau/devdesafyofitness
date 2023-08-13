<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaController extends Controller
{
    public function envia (){

        $token  = 'EAACUv7DYxoUBAPewKbhY52Ss8ddPvrU21wOE5wmOtXAzd8sEM7DoZCHOr2AbeorCJRT9EP7aNI15wUNeZACRwqKEKRMC2FeXZASC24dRZAbVrfUmZA13Ne3oWs9VjJ5OBWeLWi0ID2tIExlQnTlAPGCl4FZBh8Ffb8Brepsj9SDrLkK7YpLJZCNtoog3KcZAcQNScH6MU2e21wZDZD';

        $telefono = '17372700551';
        $url = 'https://graph.facebook.com/v16.0/120353547722030/messages ';

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://graph.facebook.com/v16.0/120353547722030/messages',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => '{ "messaging_product": "whatsapp", "to": "'.$telefono.'", "type": "template", "template": { "name": "hello_world", "language": { "code": "en_US" } } }',
                    CURLOPT_HTTPHEADER => array( 'Content-Type: application/json', 'Authorization: Bearer '.$token.'' ),
                ));

                $response =curl_exec($curl);
                curl_close($curl);
                echo ($response);
                print("dx");
                print ($response);

    }
}
