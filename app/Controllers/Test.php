<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {

        return view('satu');
    }
    public function test()
    {
        return view('tes_view');
    }
}
