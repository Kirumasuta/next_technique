<?php

ini_set('display_errors', 1);

require_once 'app/core/Model.php';
Model::connect();
require_once 'app/core/View.php';
require_once 'app/core/Controller.php';
require_once 'app/core/Route.php';
Route::start(); // запускаем маршрутизатор