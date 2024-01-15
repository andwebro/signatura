<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('signature/dashboard.php');
    }

    public function templates()
    {
        return view('signature/templates.php');
    }

}
