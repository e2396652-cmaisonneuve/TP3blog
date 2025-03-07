<?php

namespace App\Models;

use App\Models\CRUD;

class Dashboard extends CRUD
{

    protected $table = 'dashboard';
    protected $primaryKey = 'id';
    protected $fillable = ['id',  'userName', 'userId', 'adressIP', 'dateTime', 'page'];

    final public function getLogInfo()
    {
        $data = [];

        if (isset($_SESSION['fingerPrint']) and md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
            $data['userName'] = $_SESSION['users_name'];
        } else {
            $data['userName'] = 'Guest';
        }

        // print_r($_SERVER);
        // die();

        $data['adressIP'] = $_SERVER['SERVER_ADDR'];
        $data['page'] = $_SERVER['REQUEST_URI'];
        $data['dateTime'] = date_create()->format('Y-m-d H:i:s');

        return $data;
    }
}
