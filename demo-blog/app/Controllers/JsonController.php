<?php

namespace App\Controllers;

class JsonController
{
    public function getPosts()
    {
        $file = APP_PATH_RESOURCES.'/json/get_posts.json';
        if (!file_exists($file)) {
            return false;
        }
        $result = file_get_contents($file);
        return ($result) ? json_decode($result,true) : false;
    }
}