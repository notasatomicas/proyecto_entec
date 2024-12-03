<?php

namespace App\Controllers;

class Consultas extends BaseController
{
    public function index(): string
    {
        $page_name = "Consultas";

        return
            view('layout/head', ['page_name' => $page_name]).
            view('layout/header').
            /*view('home').*/
            view('layout/footer').
            view('layout/scripts');
    }
}