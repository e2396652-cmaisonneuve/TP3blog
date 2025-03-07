<?php
session_start();
require_once('vendor/autoload.php');
require_once('config.php');
require_once('routes/web.php');

use App\Models\Dashboard;

$log = new Dashboard;
$data = $log->getLogInfo();
// print_r($data);
// die();
$log->insert($data);
