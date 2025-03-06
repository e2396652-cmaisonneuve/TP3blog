<?php

namespace App\Controllers;

use App\Providers\View;
use App\Models\Dashboard;

class DashboardController
{
    public function index()
    {
        $dashboard = new Dashboard;
        $select = $dashboard->select('id');
        return View::render('dashboard/index', ['dashboard' => $select]);
    }
}
