<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view(frontend_theme().'/homepage');
    }

    public function apidocs_static()
    {
        return view(frontend_theme().'/apidocs_static.php');
    }

}
