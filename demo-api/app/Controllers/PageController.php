<?php

namespace App\Controllers;

use App\Models\Student;

class PageController extends Controller
{
    public function index($req, $res)
    {
        Student::create([
            'name' => 'Friandy Dwi',
            'email' => 'friandydwi@hostinger.co.id',
            'faculty' => 'Fakultas 5'
        ]);

        return $this->view->render($res, 'index.twig');
    }

    public function about($req,$res)
    {
        return $this->view->render($res, 'about.twig');
    }
}