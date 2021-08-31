<?php

namespace App\Http\Controllers;

class WeFact
{
    private $url;
    private $apiKey;

    function __construct($authUser){
        $this->url			 = 'https://api.mijnwefact.nl/v2/';
        $this->apiKey		 = $authUser;
    }

    public function sendRequest($controller, $action, $params) {

        if(is_array($params)){
            $params['api_key'] 		= $this->apiKey;
            $params['controller'] 	= $controller;
            $params['action'] 		= $action;
        }

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $this->url);

        // Never skip SSL verification for production mode.
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT,'10');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        $curlResp = curl_exec($ch);
        $curlError = curl_error($ch);

        if ($curlError != ''){
            $result = array(
                'controller' => 'invalid',
                'action' => 'invalid',
                'status' => 'error',
                'date' => date('c'),
                'errors' => array($curlError)
            );
        }
        elseif(curl_getinfo($ch, CURLINFO_HTTP_CODE) == 403)
        {
            $result = array(
                'controller' => 'invalid',
                'action' => 'invalid',
                'status' => 'error',
                'date' => date('c'),
                'errors' => array($curlResp)
            );
        }
        else
        {
            $result = json_decode($curlResp, true);
        }

        return $result;
    }
}
