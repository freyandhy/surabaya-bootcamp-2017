<?php

$app->get('/', 'HomeController:index');
$app->get('/{slug}', 'HomeController:getPost');

$app->get('/json/{type}', 'ConvertController:convert_json');