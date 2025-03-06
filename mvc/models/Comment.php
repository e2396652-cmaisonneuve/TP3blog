<?php

namespace App\Models;

use App\Models\CRUD;

class Comment extends CRUD
{
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['message', 'date', 'users_id', 'articles_id'];
}
