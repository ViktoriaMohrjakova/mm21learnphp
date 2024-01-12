<?php

namespace App\Controllers;

use App\Models\Article;

class ArticlesController {
    public function index(){
        $articles = Article::all();
        view('articles/index', compact('articles'));
    }

    public function create(){
        view('articles/create');
    }

    public function store(){
        $filename = md5($_FILES['image']['name'].microtime()). '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], 'public/' . $filename);
        $article = new Article();
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->image = 'public/' . $filename;
        $article->save();
        header('Location: /admin/articles');
    }

    public function show(){
        $id = $_GET['id'];
        $article = Article::find($id);
        //view('articles/view', ['article' => $article]);

        view('articles/view', compact('article'));
    }

    public function edit(){
        $id = $_GET['id'];
        $article = Article::find($id);
        view('articles/edit', compact('article'));
    }

    public function update(){
        $id = $_GET['id'];
        $article = Article::find($id);
        $article->title = $_POST['title'];
        $article->body = $_POST['body'];
        $article->save();
        header('Location: /admin/articles');
    }
    public function delete(){
        $id = $_GET['id'];
        $article = Article::find($id);
        $article->delete();
        header('Location: /admin/articles');
    }
}