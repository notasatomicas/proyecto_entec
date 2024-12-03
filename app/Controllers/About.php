<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $page_name = "Acerca de";

        return
            view('layout/head', ['page_name' => $page_name]).
            view('layout/header').
            /*view('home').*/
            view('layout/footer').
            view('layout/scripts');
    }
}
