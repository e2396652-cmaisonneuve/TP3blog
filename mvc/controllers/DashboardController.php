<?php

namespace App\Controllers;

use App\Providers\View;
use App\Models\Dashboard;
use App\Providers\Auth;

class DashboardController
{
    public function __construct()
    {
        Auth::session();
    }

    public function index()
    {

        Auth::privilege(1);

        $dashboard = new Dashboard();
        $select = $dashboard->select('id', 'DESC');

        // print_r($select);
        // die();

        if ($select) {
            return View::render('dashboard/index', ['dashboards' => $select]);
        } else {
            return View::render('error', ['msg' => "Page not found"]);
        }
    }
}
