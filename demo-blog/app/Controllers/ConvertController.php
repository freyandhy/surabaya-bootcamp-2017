<?php

namespace App\Controllers;

Use App\Controllers\CurlController as Curl;

class ConvertController
{
    public function convert_json($req,$res,$type)
    {
        $type = $req->getAttribute('type');
        $url = 'http://bootcamp.wp/api/'.$type.'/';

        switch($type) {
            case 'get_posts':
                $data = Curl::get_curl($url);
                $file = APP_PATH_RESOURCES.'/json/get_posts.json';
                break;
        }

        $write = file_put_contents($file, $data);
        echo $type.'.json has been created.';
    }
}