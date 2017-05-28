<?php

$json = file_get_contents('http://bootcamp.api/api/mahasiswa');

$datas = json_decode($json);

foreach ($datas as $data) {
    echo $data->name.'<br>';
    echo $data->email.'<br>';
    echo '<br>';
}

?>