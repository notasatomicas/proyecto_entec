<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index(): string
    {
        $page_name = "Contacto";

        return
            view('layout/head', ['page_name' => $page_name]).
            view('layout/header').
            /*view('home').*/
            view('layout/footer').
            view('layout/scripts');
    }
}