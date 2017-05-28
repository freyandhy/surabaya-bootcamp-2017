<?php

$app->get('/', 'PageController:index');
$app->get('/about', 'PageController:about');

$app->get('/api/mahasiswa', 'ApiController:getAllMhs');
$app->get('/api/mahasiswa/{limit}', 'ApiController:getLimitMhs');
$app->get('/api/mahasiswa/id/{id}', 'ApiController:getMhsId');