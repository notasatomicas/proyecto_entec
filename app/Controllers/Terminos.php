<?php

namespace App\Controllers;

class Terminos extends BaseController
{
    public function index(): string
    {
        $page_name = "Terminos y uso";

        return
            view('layout/head', ['page_name' => $page_name]).
            view('layout/header').
            /*view('home').*/
            view('layout/footer').
            view('layout/scripts');
    }
}