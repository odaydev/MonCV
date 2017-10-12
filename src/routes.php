<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\IndexAction\IndexController;
use App\AdminAction\AdminController;
use App\ForumAction\ForumController;

// Routes GET
$app->get('/', IndexController::class);

$app->get('/register', RegisterController::class);

$app->get('/forum', ForumController::class);

// Routes POST
$app->post('/admin', AdminController::class);
