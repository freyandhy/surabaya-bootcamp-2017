<?php

class Twig_Extensions_App extends Twig_Extension
{
    public function getFilters()
    {
        $filters = array(
            new Twig_SimpleFilter('asset_url', 'twig_asset_url', array('needs_environment' => true, 'is_safe' => array('html'))),
            new Twig_SimpleFilter('dump', 'twig_dump', array('needs_environment' => false, 'is_safe' => array('html'))),
            new Twig_SimpleFilter('print_r', 'twig_print_r', array('needs_environment' => false, 'is_safe' => array('html'))),
            new Twig_SimpleFilter('paging', 'twig_paging', array('needs_environment' => false, 'is_safe' => array('html'))),
            new Twig_SimpleFilter('full_date', 'twig_full_date', array('needs_environment' => false, 'is_safe' => array('html'))),
            new Twig_SimpleFilter('link', 'twig_link'),
        );

        return $filters;
    }

    public function getGlobals()
    {
        $globals = array(
            'json' => new App\Controllers\JsonController,
        );

        return $globals;
    }

    public function getName()
    {
        return 'app';
    }
}

function twig_asset_url(Twig_Environment $env, $asset)
{
    $globals = $env->getGlobals();
    return APP_URL . 'assets/'.$asset;
}

function twig_dump($var)
{
    return var_dump($var);
}

function twig_print_r($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function twig_paging($data,$page,$per_page)
{
    $total = count($data);

    $start = --$page * $per_page;
    $datas = array_slice($data, $start, $per_page);

    $pages = (int)ceil($total / $per_page);

    $result = array(
        'pages' => $pages,
        'list' => $datas
    );

    return $result;
}

function twig_full_date($data)
{
    $date_time_explode = explode(' ',$data);

    $date = $date_time_explode[0];
    $time = $date_time_explode[1];

    $date_explode = explode('-', $date);

    $d = $date_explode[2];
    $m = $date_explode[1];
    $y = $date_explode[0];

    $dateIndo = $d . ' '. getIndoMonth($m) . ' '. $y;

    return $dateIndo;
}

function twig_link($link = null)
{
    if (strpos($link, 'http') !== false || strpos($link, 'https') !== false) {
            return $link;
        }
        $link = trim($link, '/');
        
        return APP_URL . $link;
}

function getIndoMonth($data)
{
    switch ($data) {
        case '01':
            $m =  'Januari';
            break;
        case '02':
            $m =  'Februari';
            break;
        case '03':
            $m =  'Maret';
            break;
        case '04':
            $m =  'April';
            break;
        case '05':
            $m =  'Mei';
            break;
        case '06':
            $m =  'Juni';
            break;
        case '07':
            $m =  'Juli';
            break;
        case '08':
            $m =  'Agustus';
            break;
        case '09':
            $m =  'September';
            break;
        case '10':
            $m =  'Oktober';
            break;
        case '11':
            $m =  'November';
            break;
        case '12':
            $m =  'Desember';
            break;
    }

    return $m;
}