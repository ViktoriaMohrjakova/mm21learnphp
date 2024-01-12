<?php

use App\Controllers\ArticlesController;
use App\Controllers\UsersController;
use App\Controllers\AuthController;
use App\Router;
use App\Controllers\PublicController;

Router::get('/', [PublicController::class, 'home']); 
Router::get('/about', [PublicController::class, 'about']);

Router::get('/test', [PublicController::class, 'test']);
Router::post('/test', [PublicController::class, 'testAnswer']);

Router::get('/admin/articles', [ArticlesController::class, 'index']);
Router::get('/admin/articles/new', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);
Router::get('/admin/articles/view', [ArticlesController::class, 'show']);
Router::get('/admin/articles/edit', [ArticlesController::class, 'edit']);
Router::post('/admin/articles/edit', [ArticlesController::class, 'update']);
Router::get('/admin/articles/delete', [ArticlesController::class, 'delete']);

Router::get('/admin/users', [UsersController::class, 'index']);
Router::get('/admin/users/new', [UsersController::class, 'create']);
Router::post('/admin/users', [UsersController::class, 'store']);
Router::get('/admin/users/view', [UsersController::class, 'show']);
Router::get('/admin/users/edit', [UsersController::class, 'edit']);
Router::post('/admin/users/edit', [UsersController::class, 'update']);
Router::get('/admin/users/delete', [UsersController::class, 'delete']);

Router::post('/register', [AuthController::class, 'register']);
Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::get('/logout', [AuthController::class, 'logout']);
	