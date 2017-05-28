<?php

namespace App\Controllers;

class CurlController
{
    public static function get_curl($url)
    {
        $defaults = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_SSL_VERIFYPEER => FALSE
        );
        
        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
        if( ! $result = curl_exec($ch))
        {
            trigger_error(curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }

    public static function post_curl($url,$method,$data)
    {
        $fields = '';
        foreach($data as $key => $value) {
            $fields .= $key . '=' . $value . '&';
        }
        rtrim($fields, '&');

        $defaults = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_POST => count($data),
            CURLOPT_POSTFIELDS => $fields
        );
        
        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
        if( ! $result = curl_exec($ch))
        {
            trigger_error(curl_error($ch));
        }
        curl_close($ch);
        return $result;   
    }
}