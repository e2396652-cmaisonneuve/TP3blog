<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Comment;
use App\Models\User;
use App\Providers\View;

class HomeController
{

    public function index()
    {
        $article = new Article;
        $select = $article->select('id');

        foreach($select as &$row){
            $categorie = new Categorie;
            $cat = $categorie->selectId($row['categories_id']);
            $row['categorie'] = $cat['name'];
            
            $user = new User;
            $use = $user->selectId($row['users_id']);
            $row['user'] = $use['name'];
            $email = $user->selectId($row['users_id']);
            $row['email'] = $email['email'];

            $comment = new Comment;
            $com = $comment->selectWhere('articles_id', $row['id']);
           if($com){
                foreach($com as &$commen){
                    $author = new User;
                    $aut = $author->selectId($commen['users_id']);
                    $commen['name'] = $aut['name'];
                }
           }
           
            $row['comments'] = $com;
        }
        
        return View::render('home', ['articles' => $select]);
    }

 }