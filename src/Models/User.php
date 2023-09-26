<?php
namespace App\Models;

class User extends Model{
    public static $table = 'users';
    public $id;
    public $email;
    public $password;

    public static function auth(){
        if(isset($_SESSION['user'])){
            $user = self::find($_SESSION['user']);
            if($user){
                return $user;
            }
        }
        return false;
    }
}