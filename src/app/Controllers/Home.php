<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        var_dump(12);die;
        return view('welcome_message');
    }

    public function list()
    {
        return view('welcome_message');
    }
}
