<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\IndexAction\IndexController;
use App\AdminAction\AdminController;
use App\ForumAction\ForumController;
use App\RegisterAction\RegisterController;

// Routes GET
$app->get('/', IndexController::class);
$app->get('/forum', ForumController::class);
$app->get('/register', RegisterController::class);


// Routes POST
$app->post('/admin', AdminController::class);
