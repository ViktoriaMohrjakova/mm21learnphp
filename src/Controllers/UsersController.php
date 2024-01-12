<?php

namespace App\Controllers;

use App\Models\User;

class UsersController {
    public function index(){
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function create(){
        view('users/create');
    }

    public function store(){
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->name = $_POST['name'];

        $user->save();
        header('Location: /admin/users');
    }

    public function show(){
        $id = $_GET['id'];
        $user = User::find($id);
        //view('users/view', ['user' => $user]);

        view('users/view', compact('user'));
    }

    public function edit(){
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/edit', compact('user'));
    }

    public function update(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->name = $_POST['name'];
        $user->save();
        header('Location: /admin/users');
    }
    public function delete(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->delete();
        header('Location: /admin/users');
    }
}