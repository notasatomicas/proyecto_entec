<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $page_name = "Inicio";

        return
            view('layout/head', ['page_name' => $page_name]).
            view('layout/header').
            view('home').
            view('layout/footer').
            view('layout/scripts');
    }
}
