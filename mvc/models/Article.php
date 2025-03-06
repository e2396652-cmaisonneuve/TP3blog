<?php

namespace App\Models;

use App\Models\CRUD;

class Article extends CRUD
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'date', 'users_id', 'categories_id'];
}
