<?php

namespace App\Controllers;

Use Slim\View\Twig as View;

class HomeController extends Controller
{
    public function index($req,$res)
    {
        return $this->view->render($res, 'home.twig');
    }

    public function getPost($req,$res,$slug)
    {
        return $this->view->render($res, 'post.twig', $slug);
    }
}