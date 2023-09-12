<?php

namespace App\Controllers;

class PublicController {
    public function home(){
        $name = 'Kaspar';
        $num = 10;
        view('home', compact('name', 'num'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        var_dump($_POST);
        var_dump($_SERVER);
        view('form');
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}