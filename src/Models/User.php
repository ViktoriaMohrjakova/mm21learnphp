<?php

namespace App\Models;

class User extends Model{
    public static $table = 'Users';
    public $id;
    public $email;
    public $password;
}