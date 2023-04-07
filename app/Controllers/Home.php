<?php

namespace App\Controllers;
helper('url');

class Home extends BaseController
{
    public function index()
    {
        helper('url');
        return view('home');
    }
}
