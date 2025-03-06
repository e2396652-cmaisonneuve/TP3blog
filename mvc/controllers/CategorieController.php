<?php

namespace App\Controllers;

use App\Models\Categorie;
use App\Providers\View;
use App\Providers\Validator;

class CategorieController
{

    public function index()
    {
        $categorie = new Categorie;
        $select = $categorie->select('id');
        return View::render('categorie/index', ['categories' => $select]);
    }

    public function create()
    {
        $categorie = new Categorie;
        $select = $categorie->Select();
        return View::render('categorie/create');
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $categorie = new Categorie;
            if ($selectId = $categorie->selectId($data['id'])) {
                return View::render('categorie/show', ['categorie' => $selectId]);
            } else {
                return View::render('error', ['msg' => "Categorie doesn't exist"]);
            }
        }
        return View::render('error');
    }

    public function store($data = [])
    {
        $validator = new Validator;
        $validator->field('name', $data['name'])->required()->max(50);

        if ($validator->isSuccess()) {
            $categorie = new Categorie;
            $insert = $categorie->insert($data);
            if ($insert) {
                return view::redirect('categorie/show?id=' . $insert);
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('categorie/create', ['errors' => $errors, 'categorie' => $data]);
        }
    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $categorie = new Categorie;
            if ($selectId = $categorie->selectId($data['id'])) {
                return View::render('categorie/edit', ['categorie' => $selectId]);
            } else {
                return View::render('error', ['msg' => "Categorie doesn't exist"]);
            }
        }
        return View::render('error');
    }

    public function update($data = [], $get = [])
    {
        $validator = new Validator;
        $validator->field('name', $data['name'])->max(50);

        if ($validator->isSuccess()) {
            $categorie = new Categorie;
            $update = $categorie->update($data, $get['id']);
            if ($update) {
                return view::redirect('categorie/show?id=' . $get['id']);
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('categorie/edit', ['errors' => $errors, 'categorie' => $data]);
        }
    }

    public function delete($data = [])
    {
        $id = $data['id'];
        $categorie = new Categorie;
        $delete = $categorie->delete($id);
        if ($delete) {
            return view::redirect('categories');
        } else {
            return View::render('error');
        }
    }
}
